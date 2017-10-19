<?php
error_reporting(NULL);
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Register</title>
</head>
	<body>
							<?php
                            $this->load->helper("form");
                            if (validation_errors() != NULL) {
                                ?><div  class="alert alert-danger" role="alert"> <?php echo validation_errors(); ?></div><?php
                            } else {
                                ?><div  class="alert alert-success" role="alert"> <?php echo $msg ?></div><?php
                            }
                            ?>
		<table>
                                <tr>
                                    <td>

                                    </td>
                                    <td class="col-lg-12">
                                        <?php
                                        $this->load->helper("form");
                                        echo form_open("site/register");
                                        $data = array(
                                            "name" => "first_name",
                                            "id" => "first_name",
                                            "value" => "",
                                            "class" => "form-control",
                                            "placeholder" => "First Name",
                                            "aria-describedby" => "sizing-addon1"
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <td>

                                    </td>
                                    <td class="col-lg-12">
                                        <?php
                                        
                                        $data = array(
                                            "name" => "last_name",
                                            "id" => "last_name",
                                            "value" => "",
                                            "class" => "form-control",
                                            "placeholder" => "Last Name",
                                            "aria-describedby" => "sizing-addon1"
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>
                               
                                <tr>
                                    <td>

                                    </td>
                                    <td class="col-lg-12">
                                        <?php
                                        $data = array(
                                            "name" => "email",
                                            "id" => "email",
                                            "value" => "",
                                            "class" => "form-control",
                                            "placeholder" => "Email",
                                            "aria-describedby" => "sizing-addon1"
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td>

                                    </td>
                                    <td class="col-lg-12">
                                        <?php
                                        $data = array(
                                            "name" => "password",
                                            "id" => "password",
                                            "value" => "",
                                            "class" => "form-control",
                                            "placeholder" => "Password",
                                            "aria-describedby" => "sizing-addon1"
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td>

                                    </td>
                                    <td class="col-lg-12">
                                        <?php
                                        $data = array(
                                            "name" => "conf_password",
                                            "id" => "conf_password",
                                            "value" => "",
                                            "class" => "form-control",
                                            "placeholder" => "Confirm Password",
                                            "aria-describedby" => "sizing-addon1"
                                        );

                                        echo form_input($data);
                                        ?>
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td>

                                    </td>
                                    <td class="col-lg-12">
                                        <?php
                                        $data1 = array(
                                            "name" => "register",
                                            "id" => "register",
                                            "value" => "Register",
                                            "class" => "btn btn-primary",
                                            "placeholder" => "Send",
                                            "aria-describedby" => "sizing-addon1"
                                        );
                                        echo form_submit($data1);
                                        echo form_close();
                                        ?>
                                    </td>
                                </tr>
                                
                            </table>

		
	</body>
</html>