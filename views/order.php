<div class="content">
  <div class="absolutemain">
    <div class="registration">
        <h1>Замовлення</h1> <hr> <br>
    <form action="./index.php?action=order_check" method="post">
        <div class="registrationform">
            <label for="pip">ПІП:</label>
            <input type="text" name="pip"/>
        </div>
        <div class="registrationform">
            <label for="email">Електронна пошта:</label>
            <input type="email" name="email"/>
        </div>
        <div class="registrationform">
            <label for="address">Ваша адреса:</label>
            <input type="text" name="address"/>
        </div>
        <div class="registrationform">
            <label for="phone">Телефон:</label>
            <input type="text" name="phone"/>
        </div>
        <div class="registrationform">
            <label for="cake">Тортик:</label>
            <input type="text" name="cake"/>
        </div>
        <div class="registrationform">
            <label for="kg">Вага(кг):</label>
            <input type="text" name="kg"/>
            <p>1 кг = 200 грн</p>
        </div>
        <div class="registrationform">
            <label for="wishes">Особливі побажання:</label>
            <input type="textarea" name="wishes"/>
        </div>
        <br>

<?php
    if(array_key_exists('errors', $_GET))
    {
        echo '<div role="alert">';

        $errors = explode('@', $_GET['errors']);
        if(in_array('email', $errors))
        {
            echo '<b>Невірний e-mail.<br>';
        }
        echo '</div>';
    }
?>

        <div class="registrationform">
            <button type="submit">Замовити</button>
        </div>
    </form>
    </div>
    </div>
</div>
