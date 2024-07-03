@echo off
SETLOCAL

REM Base directory for views
SET BASE_DIR=resources\views

REM Create base directories
mkdir %BASE_DIR%\auth
mkdir %BASE_DIR%\auth\password
mkdir %BASE_DIR%\users
mkdir %BASE_DIR%\classrooms
mkdir %BASE_DIR%\courses
mkdir %BASE_DIR%\enrollments

REM Create view files with content
echo @extends('layouts.app') > %BASE_DIR%\auth\login.blade.php
echo. >> %BASE_DIR%\auth\login.blade.php
echo @section('content') >> %BASE_DIR%\auth\login.blade.php
echo. >> %BASE_DIR%\auth\login.blade.php
echo @endsection >> %BASE_DIR%\auth\login.blade.php

echo @extends('layouts.app') > %BASE_DIR%\auth\register.blade.php
echo. >> %BASE_DIR%\auth\register.blade.php
echo @section('content') >> %BASE_DIR%\auth\register.blade.php
echo. >> %BASE_DIR%\auth\register.blade.php
echo @endsection >> %BASE_DIR%\auth\register.blade.php

echo @extends('layouts.app') > %BASE_DIR%\auth\password\email.blade.php
echo. >> %BASE_DIR%\auth\password\email.blade.php
echo @section('content') >> %BASE_DIR%\auth\password\email.blade.php
echo. >> %BASE_DIR%\auth\password\email.blade.php
echo @endsection >> %BASE_DIR%\auth\password\email.blade.php

echo @extends('layouts.app') > %BASE_DIR%\auth\password\reset.blade.php
echo. >> %BASE_DIR%\auth\password\reset.blade.php
echo @section('content') >> %BASE_DIR%\auth\password\reset.blade.php
echo. >> %BASE_DIR%\auth\password\reset.blade.php
echo @endsection >> %BASE_DIR%\auth\password\reset.blade.php

echo @extends('layouts.app') > %BASE_DIR%\auth\password\confirm.blade.php
echo. >> %BASE_DIR%\auth\password\confirm.blade.php
echo @section('content') >> %BASE_DIR%\auth\password\confirm.blade.php
echo. >> %BASE_DIR%\auth\password\confirm.blade.php
echo @endsection >> %BASE_DIR%\auth\password\confirm.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\index.blade.php
echo. >> %BASE_DIR%\users\index.blade.php
echo @section('content') >> %BASE_DIR%\users\index.blade.php
echo. >> %BASE_DIR%\users\index.blade.php
echo @endsection >> %BASE_DIR%\users\index.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\show.blade.php
echo. >> %BASE_DIR%\users\show.blade.php
echo @section('content') >> %BASE_DIR%\users\show.blade.php
echo. >> %BASE_DIR%\users\show.blade.php
echo @endsection >> %BASE_DIR%\users\show.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\create.blade.php
echo. >> %BASE_DIR%\users\create.blade.php
echo @section('content') >> %BASE_DIR%\users\create.blade.php
echo. >> %BASE_DIR%\users\create.blade.php
echo @endsection >> %BASE_DIR%\users\create.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\edit.blade.php
echo. >> %BASE_DIR%\users\edit.blade.php
echo @section('content') >> %BASE_DIR%\users\edit.blade.php
echo. >> %BASE_DIR%\users\edit.blade.php
echo @endsection >> %BASE_DIR%\users\edit.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\profile.blade.php
echo. >> %BASE_DIR%\users\profile.blade.php
echo @section('content') >> %BASE_DIR%\users\profile.blade.php
echo. >> %BASE_DIR%\users\profile.blade.php
echo @endsection >> %BASE_DIR%\users\profile.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\all.blade.php
echo. >> %BASE_DIR%\users\all.blade.php
echo @section('content') >> %BASE_DIR%\users\all.blade.php
echo. >> %BASE_DIR%\users\all.blade.php
echo @endsection >> %BASE_DIR%\users\all.blade.php

echo @extends('layouts.app') > %BASE_DIR%\users\studentsTaught.blade.php
echo. >> %BASE_DIR%\users\studentsTaught.blade.php
echo @section('content') >> %BASE_DIR%\users\studentsTaught.blade.php
echo. >> %BASE_DIR%\users\studentsTaught.blade.php
echo @endsection >> %BASE_DIR%\users\studentsTaught.blade.php

echo @extends('layouts.app') > %BASE_DIR%\classrooms\index.blade.php
echo. >> %BASE_DIR%\classrooms\index.blade.php
echo @section('content') >> %BASE_DIR%\classrooms\index.blade.php
echo. >> %BASE_DIR%\classrooms\index.blade.php
echo @endsection >> %BASE_DIR%\classrooms\index.blade.php

echo @extends('layouts.app') > %BASE_DIR%\classrooms\show.blade.php
echo. >> %BASE_DIR%\classrooms\show.blade.php
echo @section('content') >> %BASE_DIR%\classrooms\show.blade.php
echo. >> %BASE_DIR%\classrooms\show.blade.php
echo @endsection >> %BASE_DIR%\classrooms\show.blade.php

echo @extends('layouts.app') > %BASE_DIR%\classrooms\create.blade.php
echo. >> %BASE_DIR%\classrooms\create.blade.php
echo @section('content') >> %BASE_DIR%\classrooms\create.blade.php
echo. >> %BASE_DIR%\classrooms\create.blade.php
echo @endsection >> %BASE_DIR%\classrooms\create.blade.php

echo @extends('layouts.app') > %BASE_DIR%\classrooms\edit.blade.php
echo. >> %BASE_DIR%\classrooms\edit.blade.php
echo @section('content') >> %BASE_DIR%\classrooms\edit.blade.php
echo. >> %BASE_DIR%\classrooms\edit.blade.php
echo @endsection >> %BASE_DIR%\classrooms\edit.blade.php

echo @extends('layouts.app') > %BASE_DIR%\classrooms\teacherClassrooms.blade.php
echo. >> %BASE_DIR%\classrooms\teacherClassrooms.blade.php
echo @section('content') >> %BASE_DIR%\classrooms\teacherClassrooms.blade.php
echo. >> %BASE_DIR%\classrooms\teacherClassrooms.blade.php
echo @endsection >> %BASE_DIR%\classrooms\teacherClassrooms.blade.php

echo @extends('layouts.app') > %BASE_DIR%\courses\index.blade.php
echo. >> %BASE_DIR%\courses\index.blade.php
echo @section('content') >> %BASE_DIR%\courses\index.blade.php
echo. >> %BASE_DIR%\courses\index.blade.php
echo @endsection >> %BASE_DIR%\courses\index.blade.php

echo @extends('layouts.app') > %BASE_DIR%\courses\show.blade.php
echo. >> %BASE_DIR%\courses\show.blade.php
echo @section('content') >> %BASE_DIR%\courses\show.blade.php
echo. >> %BASE_DIR%\courses\show.blade.php
echo @endsection >> %BASE_DIR%\courses\show.blade.php

echo @extends('layouts.app') > %BASE_DIR%\courses\create.blade.php
echo. >> %BASE_DIR%\courses\create.blade.php
echo @section('content') >> %BASE_DIR%\courses\create.blade.php
echo. >> %BASE_DIR%\courses\create.blade.php
echo @endsection >> %BASE_DIR%\courses\create.blade.php

echo @extends('layouts.app') > %BASE_DIR%\courses\edit.blade.php
echo. >> %BASE_DIR%\courses\edit.blade.php
echo @section('content') >> %BASE_DIR%\courses\edit.blade.php
echo. >> %BASE_DIR%\courses\edit.blade.php
echo @endsection >> %BASE_DIR%\courses\edit.blade.php

echo @extends('layouts.app') > %BASE_DIR%\courses\teacherCourses.blade.php
echo. >> %BASE_DIR%\courses\teacherCourses.blade.php
echo @section('content') >> %BASE_DIR%\courses\teacherCourses.blade.php
echo. >> %BASE_DIR%\courses\teacherCourses.blade.php
echo @endsection >> %BASE_DIR%\courses\teacherCourses.blade.php

echo @extends('layouts.app') > %BASE_DIR%\enrollments\index.blade.php
echo. >> %BASE_DIR%\enrollments\index.blade.php
echo @section('content') >> %BASE_DIR%\enrollments\index.blade.php
echo. >> %BASE_DIR%\enrollments\index.blade.php
echo @endsection >> %BASE_DIR%\enrollments\index.blade.php

echo @extends('layouts.app') > %BASE_DIR%\enrollments\show.blade.php
echo. >> %BASE_DIR%\enrollments\show.blade.php
echo @section('content') >> %BASE_DIR%\enrollments\show.blade.php
echo. >> %BASE_DIR%\enrollments\show.blade.php
echo @endsection >> %BASE_DIR%\enrollments\show.blade.php

echo @extends('layouts.app') > %BASE_DIR%\enrollments\create.blade.php
echo. >> %BASE_DIR%\enrollments\create.blade.php
echo @section('content') >> %BASE_DIR%\enrollments\create.blade.php
echo. >> %BASE_DIR%\enrollments\create.blade.php
echo @endsection >> %BASE_DIR%\enrollments\create.blade.php

echo @extends('layouts.app') > %BASE_DIR%\enrollments\edit.blade.php
echo. >> %BASE_DIR%\enrollments\edit.blade.php
echo @section('content') >> %BASE_DIR%\enrollments\edit.blade.php
echo. >> %BASE_DIR%\enrollments\edit.blade.php
echo @endsection >> %BASE_DIR%\enrollments\edit.blade.php

echo View directories and files created successfully.

ENDLOCAL
