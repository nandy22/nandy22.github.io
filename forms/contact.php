<?php
            require_once "Mail.php";

            $host = "ssl://smtp.gmail.com";
            $username = "nandy.infonaut@gmail.com";
            $password = "nandeesha_M22";
            $port = "465";
            $to = "nandy.infonaut@gmail.com";

            $email_from = "nandy.infonaut@gmail.com";
            $email_subject = "Test Mail" ;
            $email_body = "whatever you like" ;
            $email_address = "nandy.infonaut@gmail.com";
            $content = "text/html; charset=utf-8";
            $mime = "1.0";

            $headers = array ('From' => $email_from,
                            'To' => $to,
                            'Subject' => $email_subject,
                            'Reply-To' => $email_address,
                            'MIME-Version' => $mime,
                            'Content-type' => $content);

            $params = array  ('host' => $host,
                            'port' => $port,
                            'auth' => true,
                            'username' => $username,
                            'password' => $password);

            $smtp = Mail::factory ('smtp', $params);
            $mail = $smtp->send($to, $headers, $email_body);

            if (PEAR::isError($mail)) {
            echo("<p>" . $mail->getMessage() . "</p>");
            } else {
            echo("<p>Message sent successfully!</p>");
            }
        ?>
