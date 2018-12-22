<div class="content">
  <div class="absolutemain">
    <div class="order">
        <h1>Замовлення</h1> <hr> <br>
    <form action="./index.php?action=order_check" method="post">
        <div class="orderform">
            <label for="pip">ПІП:</label>
            <input type="text" name="pip"/>
        </div>
        <div class="orderform">
            <label for="email">Електронна пошта:</label>
            <input type="email" name="email"/>
        </div>
        <div class="orderform">
            <label for="address">Ваша адреса:</label>
            <input type="text" name="address"/>
        </div>
        <div class="orderform">
            <label for="phone">Телефон:</label>
            <input type="text" name="phone"/>
        </div>
        <div class="orderform">
            <label for="cake">Тортик:</label>
            <input type="text" name="cake"/>
        </div>
        <div class="orderform">
            <label for="kg">Вага(кг):</label>
            <input type="text" name="kg"/>
            <p>1 кг = 200 грн</p>
        </div>
        <div class="orderform">
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

        <div class="orderform">
            <button type="submit">Замовити</button>
        </div>
    </form>
    </div>
    </div>
</div>
