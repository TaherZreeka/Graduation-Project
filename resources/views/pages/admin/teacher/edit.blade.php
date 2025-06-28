@extends('pages.admin.admin-content')

@section('content')
<!-- Slotted content -->
<h2>تعديل المعلم</h2>
<form action="/admin/teachers/{{$teacher->id}}" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    @method('PATCH')
    <h3>Edit {{$teacher->first_name}} {{$teacher->last_name}}</h3>
    <div class="row">
        <div class="col-md-2">
            <div class="mb-3">
                <label for="salutation" class="form-label">اللقب</label>
                <select name="salutation" id="salutation" class="form-select">
                    <option value="">-- Choose One --</option>
                    <option value="Dr." {{$teacher->salutation == 'Dr.' ? 'selected' : ''}}>Dr.</option>
                    <option value="Mr." {{$teacher->salutation == 'Mr.' ? 'selected' : ''}}>Mr.</option>
                    <option value="Mrs." {{$teacher->salutation == 'Mrs.' ? 'selected' : ''}}>Mrs.</option>
                    <option value="Miss." {{$teacher->salutation == 'Miss.' ? 'selected' : ''}}>Miss.</option>
                </select>
                <x-form-error name="salutation" />
            </div>
        </div>
        <div class="col-md-2">
            <div class="mb-3">
                <label for="initials" class="form-label">Initials</label>
                <input type="text" class="form-control" id="initials" name="initials" value="{{$teacher->initials}}"
                    required>
                <x-form-error name="initials" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="first_name" class="form-label">الاسم الأول</label>
                <input type="text" class="form-control" id="first_name" name="first_name"
                    value="{{$teacher->first_name}}" required>
                <x-form-error name="first_name" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="mb-3">
                <label for="last_name" class="form-label">الكنية</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="{{$teacher->last_name}}"
                    required>
                <x-form-error name="last_name" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="nic" class="form-label">بطاقة الشبكة</label>
                <input type="text" class="form-control" id="nic" name="nic" value="{{$teacher->nic}}">
                <x-form-error name="nic" />
            </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="dob" class="form-label">تاريخ الميلاد</label>
                <input type="date" class="form-control" id="dob" name="dob" value="{{$teacher->dob}}" required>
                <x-form-error name="dob" />
            </div>
        </div>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-warning">تعديل المعلم</button>
        <button type="reset" class="btn btn-secondary">إلغاء</button>
    </div>
</form>

<form action="/admin/subjects/assign" method="post" class="shadow-lg p-3 mb-5 mt-3 bg-body-tertiary rounded">
    @csrf
    <input type="hidden" name="teacher" value="{{$teacher->id}}">
    <h3>Assigned Subjects</h3>
    <div class="mb-3">
        <label for="subjects" class="form-label">المواضيع</label>
        <div class="row">
            @foreach ($subjects as $subject)
            <div class="col-sm-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="{{$subject->id}}" name="subjects[]"
                        id="{{$subject->code}}">
                    <label class="form-check-label" for="{{$subject->code}}">
                        {{$subject->code}}
                    </label>
                </div>
                <x-form-error name="subjects" />
            </div>
            @endforeach
        </div>
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-warning" id="asgn">تعيين</button>
        <button type="reset" class="btn btn-outline-secondary">إلغاء</button>
    </div>
</form>
<!--  -->

<script>
    $(document).ready(function() {

        // set page title
        $(document).prop('title', 'تعديل المعلم | نظام إدارة الطلاب');

        const $assignButton = $("#asgn[type=submit]");
        let preAssignedSubjects = [];

        // Disable the button initially
        $assignButton.prop('disabled', true);

        // Get the initial teacher ID
        const teacherId = "{{$teacher->id}}";

        // Fetch pre-assigned subjects for the selected teacher
        $.ajax({
            url: `/admin/subjects/teachers/${teacherId}`,
            type: 'GET',
            success: function(response) {
                preAssignedSubjects = response.map(subject => subject.id); // Save pre-assigned subjects
                preAssignedSubjects.forEach(subjectId => {
                    $(`input[value=${subjectId}]`).prop('checked', true); // Check pre-assigned subjects
                });
                checkForChanges(); // Check if changes were made
            },
            error: function(error) {
                console.log(error);
            }
        });

        // Monitor changes to the checkboxes (subject selection)
        $("input[type=checkbox][name='subjects[]']").on('change', function() {
            checkForChanges();
        });

        // Function to check if there are any changes compared to the pre-assigned subjects
        function checkForChanges() {
            let hasChanges = false;

            // Check if there are new subjects selected or old subjects unselected
            $("input[type=checkbox][name='subjects[]']").each(function() {
                const subjectId = parseInt($(this).val());

                if ($(this).prop('checked') && !preAssignedSubjects.includes(subjectId)) {
                    // New subject selected
                    hasChanges = true;
                } else if (!$(this).prop('checked') && preAssignedSubjects.includes(subjectId)) {
                    // Previously assigned subject unchecked
                    hasChanges = true;
                }
            });

            // Enable the "Assign" button only if changes are detected
            $assignButton.prop('disabled', !hasChanges);
        }
    });
</script>


@endsection