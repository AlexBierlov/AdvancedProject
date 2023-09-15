<div class="main">
   <section>
      <div class="container">
         <div class="registration">
            <div class="reg__suptitle">
               <a class="reg__suptitle-item" href="#">Головна</a>
               <div class="round"></div>
               <a class="reg__suptitle-item" href="#">Авторизація</a>
               <div class="round"></div>
               <a class="reg__suptitle-item bold" href="#">Реєстрація</a>         
            </div>
            <div class="title">
               <img src="../../images/banner-title.svg" alt="">
               <h2>Реєстрація</h2>
               <img src="../../images/Vector.svg" alt="">
            </div>
            <div class="reg__text">
               <div class="">
                  Увійдіть, щоб використовувати всі можливості особистого кабінету: відстеження замовлень, налаштування передплати, зв'язки з соціальними мережами та інші. Ми ніколи і за жодних умов не розголошуємо особисті дані клієнтів. Контактна інформація буде використана тільки для оформлення замовлень та зручнішої роботи з сайтом
               </div>
               
            </div>
            <div id="regError" class="error"></div>
            <form onsubmit="regBtnOn(event)" method="POST" id="regForm" class="reg__form">
               <div class="reg__form-block">
                  <input placeholder="Ім'я" class="f50" type="text" name="name" id="name" required>
                  <input placeholder="Прізвище" class="f50" type="text" name="surname" id="surname" required>
               </div>
                  
               <div class="reg__form-block">
               
                  <input placeholder="Телефон" class="f50" type="text" name="phone" id="phone" required>
                  <input placeholder="E-mail" class="f50" type="text" name="mail" id="mail" required>
               </div>
               
                  <input placeholder="Пароль" class="f100" type="password" name="password" id="password" required>
                  <div id="errPass">Введіть вірний пароль</div>
                  <input placeholder="Підтвердити пароль" class="f100" type="password" name="repeatPassword" id="repeatPassword" required>
                  <div id="noCheck">Підтвердіть згоду на обробку персональних даних</div>
               <div class="checkbox">
                  <input type="checkbox" name="" id="regCheckbox">                  
                  <label for="regCheckbox">я згоден на обробку і захист <a href="#">персональних даних</a></label>                  
               </div>
               
               <input id="regBtn" class="reg__btn" type="submit"  value="Зареєструватися">
            </form>
         </div>       
      </div>
   </section>
</div>