# Polytechnic University of the Philippines
##BSCS 3-1 Web Development Project

##Student Website System
###Functions:
Login/Signup:
    Student:
        Signup:
            Student Number
                Case sensitive Format: ####-#####-MN-0 
            First Name
                Minimum character length of 3
            Last Name    
                Minimum character length of 3
            School Webmail     
                Case Sensitive Format: username@iskolarngbayan.pup.edu.ph      
            Password
                Password must be at least 8 characters
                Password must have at least 1 uppercase character
            Retype Password
        Login:
            Student Number and Password
    Admin:
        Signup:
            Admin Username
                Case sensitive Format: ADMIN-username
            Full Name
                Minimum character length of 6
            Email     
            Password
                Password must be at least 8 characters
                Password must have at least 1 uppercase character
            Retype Password
                Password Confirmation
        Login:
            Admin Username and Password

STUDENT
    Profile Tab
        Displays the first name of the student in the current session
        Change password function
    Home Tab
    Student Enrolment Tab:
        Fields:
            Subject Code
            Subject Description
            Faculty Name
            Units
        Enrollment Button
            When enrolment is successful, it directs you to the Subjects Tab
    Student Subjects Tab:
        Enrolled Subjects Table
        Delete/Unenroll Subject Function

ADMIN
    Profile Tab
    Home Tab
    Students Tab
        Search student details
            Fields: Student Number, Student Name, School Webmail, Section
    Subjects Tab
        Displays all subjects in an accordion type list
        Display enrolled students per subjects

Logout Function:
    Logs out the session and clears all the user data




    