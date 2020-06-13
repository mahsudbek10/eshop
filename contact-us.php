<!DOCTYPE php>
<html lang="en">
    <?php require_once 'head.php'; ?>

    <div id="contact-page" class="container">
        <div class="bg">
            <div class="row">    		
                <div class="col-sm-12">    			   			
                    <h2 class="title text-center">СВЯЗАТЬСЯ <strong>С НАМИ</strong></h2>    			    				    				
                    <div id="gmap" class="contact-map">
                        <iframe
                            src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=%D0%BF%D1%80%D0%BE%D1%81%D0%BF.%20%D0%9A%D0%B0%D0%B1%D0%B0%D0%BD%D0%B1%D0%B0%D0%B9%20%D0%91%D0%B0%D1%82%D1%8B%D1%80%D0%B0%2028+()&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"
                            width="100%" height="380" frameborder="0" style="border: 0"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>			 		
            </div>    	
            <?php if(isset($_SESSION['mess_eshop'])){echo $_SESSION['mess_eshop']; unset($_SESSION['mess_eshop']);}?>
            <div class="row">  	
                <div class="col-sm-8">
                    <div class="contact-form">
                        <h2 class="title text-center">СВЯЗАТЬСЯ</h2>
                        <div class="status alert alert-success" style="display: none"></div>
                        <form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" required="required" placeholder="Имя">
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" name="subject" class="form-control" required="required" placeholder="Тема">
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="message" id="message" class="form-control" required="required" rows="8" placeholder="Ваше сообщение"></textarea>
                            </div>                        
                            <div class="form-group col-md-12">
                                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="contact-info">
                        <h2 class="title text-center">КОНТАКТНАЯ ИНФОРМАЦИЯ</h2>
                        <address>
                            <p>E-Shopper Inc.</p>
                            <p>Республика Казахстан</p>
                            <p>Нур-Султан</p>
                            <p>Телефон: +7 707 323 45 26</p>
                            <p>Fax: 1-714-252-0026</p>
                            <p>Email: info@epolice.kz</p>
                        </address>
                        <div class="social-networks">
                            <h2 class="title text-center">СОЦИАЛЬНАЯ СЕТЬ</h2>
                            <ul>
                                <li>
                                    <a href="https://epolice.kz"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://epolice.k"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="https://epolice.k"><i class="fa fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="https://epolice.k"><i class="fa fa-youtube"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    			
            </div>  
        </div>	
    </div><!--/#contact-page-->
    <?php require_once 'footer.php'; ?>
</body>
</html>

<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["submit"])){
        
        if(isset($_POST["submit"], $_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"])){
            require './csrf/Validation.php';
            require './db/db.php';
            $_POST["submit"] = Validation::input($_POST["submit"]);
            $_POST["name"] = Validation::input($_POST["name"]);
            $_POST["email"] = Validation::input($_POST["email"]);
            $_POST["subject"] = Validation::input($_POST["subject"]);
            $_POST["message"] = Validation::input($_POST["message"]);
            $ok = R::exec("INSERT INTO contact_reviews (name, email, subject, messeage) VALUES (?,?,?,?);", 
                    [$_POST["name"], $_POST["email"], $_POST["subject"], $_POST["message"]]);
            if($ok){
                $_SESSION['mess_eshop'] = "<div class='text-success fa fa-check' role='alert'>
                <h4>Ваш отзыв успешно принят! Сотрудники в ближайшее время с вами свяжутся</h4>
            </div>";
            } else {
                $_SESSION['mess_eshop'] = "<div class='text-danger fa fa-warning' role='alert'>
                <h4>Ууупс, что-то пошло не так, повторите заново</h4>
            </div>";
            }
            echo '<script>location.href = ("contact-us.php")</script>';
        }
    }
?>