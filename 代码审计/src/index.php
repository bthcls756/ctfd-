<?php
header("Content-type:text/html;charset=UTF-8");
$flag=exec('cat /flag');
highlight_file(__FILE__);
error_reporting(0);
 
if (isset($_GET['num']))
{
    $num = $_GET['num'];
    if(intval($num) < 2020 && intval($num + 1) > 2021){
        echo "Yeedo told you to go to 604 to study</br>";
    }else{
        die("Playing doesn't change your identity as a rookie");
    }
}else{
    die("Learn every day at 604");
    }
 
if (isset ($_GET['password']))
{
        if (ereg ("^[a-zA-Z0-9]+$". $_GET['password']) === FLASE)
        {
                echo '<p>You password must be alphanumeric</p>';
        }
        else if (strlen($_GET['password']) < 7 && $_GET['password'] > 999999)
        {
                if (strpos ($_GET['password'], '*-*')  !== FALSE)
                {
                        die('Flag: ' . $flag);
                }
                else
                {
                        echo('<p>*-* NOT FOUND</p>');
                }
        }
        else
        {
                echo '<p>Enter the learning check-in password</p>';
        }
}
 
?>
————————————————
版权声明：本文为CSDN博主「白塔河冲浪手」的原创文章，遵循CC 4.0 BY-SA版权协议，转载请附上原文出处链接及本声明。
原文链接：https://blog.csdn.net/m0_63253040/article/details/126570904