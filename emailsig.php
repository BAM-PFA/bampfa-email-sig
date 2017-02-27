<?php

    if (isset($_POST["submit"])) {
        if ($_POST['name']) {
            $name = $_POST['name'];
        } else {
            $jobTitle = '<span style="color: #f00;">Please enter your name</span>';
        }
        if ($_POST['jobTitle']) {
            $jobTitle = $_POST['jobTitle'];
        } else {
            $jobTitle = '<span style="color: #f00;">Please enter job title</span>';
        }
        if ($_POST['phoneNumber']) {
            $phoneNumber = $_POST['phoneNumber'];
        } else {
            $phoneNumber = '<span style="color: #f00;">Please enter your phone number</span>';
        }   
    }
?>

<table border="0" cellpadding="0" cellspacing="0" style="font-family:verdana">
    <tbody>
        <tr>
            <td valign="top" style="padding-right:10px">
                <img src="http://bampfa.berkeley.edu/images/email-sig-logo.jpg" />
            </td>
            <td border="0" cellpadding="0" cellspacing="0" valign="top">
                <p style="margin-top:0px">
                    <?php echo $name;?><br>
                    <?php echo $jobTitle;?><br>
                    UC Berkeley Art Museum &amp; Pacific Film Archive<br>
                    2120 Oxford Street #2250 Berkeley CA 94720<br>
                    <?php echo $phoneNumber;?><br />
                    <a href="http://bampfa.org" target="_blank">bampfa.org</a><br>
                </p>
            </td>
        </tr>
    </tbody>
</table>

