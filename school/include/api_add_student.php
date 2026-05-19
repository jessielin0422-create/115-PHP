<?php
include_once "db_conn.php";

echo "<pre>";
print_r($_POST);
echo "</pre>";

$sql_student="INSERT INTO `students`(`school_num`,
                            `name`,
                            `birthday`,
                            `uni_id`,
                            `addr`,
                            `parents`,
                            `tel`,
                            `dept`,
                            `graduate_at`,
                            `ststus_code`),
                    VALUES ('{$_POST['school_num']}',
                           '{$_POST['name']}',
                           '{$_POST['birthday']}',
                           '{$_POST['uni_id']}',
                           '{$_POST['addr']}',
                           '{$_POST['parents']}',
                           '{$_POST['tel']}',
                           '{$_POST['dept']}',
                           '{$_POST['graduate_at']}',
                           '{$_POST['ststus_code']}')";
                           $sal_class="INSERT INTO 'class_student'(
                           'school_num',
                           'class_code',
                           'seat_num',
                           'year')
                           VALUS('{$_POST['school_num']}',
                                 '{$_POST['class_code']}',
                                 '{$_POST['seat_num']}',
                                 '{$_POST['2000']}')";

$pdo->exec($sql_student);
$pdo->exec($sql_class);

header("location:../admin.php?inc=class_students&code={$_POST['class_code']}");
?>
