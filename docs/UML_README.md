# UML Class Diagrams for School Management System

## System Overview

The School Management System consists of the following main components:

### User Management
- **User**: Central authentication entity with email/password
- **UserRole**: Defines user roles (Admin, Teacher, Student)
- **Admin**: Administrative users with system-wide access

### Academic Management
- **Student**: Student information and academic records
- **Teacher**: Teacher information and teaching assignments
- **Guardian**: Parent/guardian information for students
- **Classes**: Class/section management
- **Subject**: Subject/course information
- **SubjectStream**: Academic streams (e.g., Science, Arts, Commerce)
- **Grade**: Grade levels (e.g., Grade 10, Grade 11)

### Communication
- **Announcement**: System-wide and class-specific announcements

## Key Relationships

### One-to-One Relationships
- User ↔ Admin (one user can be one admin)
- User ↔ Teacher (one user can be one teacher)
- User ↔ Student (one user can be one student)

### One-to-Many Relationships
- UserRole → User (one role can have many users)
- Guardian → Student (one guardian can have many students)
- Teacher → Classes (one teacher can teach many classes)
- Teacher → Announcement (one teacher can create many announcements)
- Grade → Classes (one grade can have many classes)
- SubjectStream → Classes (one stream can have many classes)

### Many-to-Many Relationships
- Student ↔ Classes (students can be in multiple classes)
- Student ↔ Subject (students can study multiple subjects)
- Teacher ↔ Subject (teachers can teach multiple subjects)
- Classes ↔ Subject (classes can have multiple subjects)
- SubjectStream ↔ Subject (streams can have multiple subjects)

## Database Design Notes

- The system uses Laravel's Eloquent ORM for relationships
- Pivot tables are used for many-to-many relationships:
  - `class_student` for Student-Classes relationship
  - `student_subjects` for Student-Subject relationship
  - `subject_stream_subject` for SubjectStream-Subject relationship
- Foreign key constraints ensure data integrity
- Timestamps are maintained for audit trails

## Usage Recommendations

- Use the **simplified diagram** for high-level system understanding
- Use the **comprehensive diagram** for detailed implementation reference
- Both diagrams follow standard UML notation
- Relationships are clearly marked with cardinality indicators

## System Features

Based on the UML structure, this system supports:
- Multi-role user authentication
- Student enrollment and management
- Teacher assignment and scheduling
- Class and subject management
- Academic stream organization
- Guardian/parent information tracking
- Announcement system for communication
- Grade-level organization 
