<div class="order bg-grad">

  <div class="container">

    <h2 class="order__title">Заявка на ремонт <span>+ скидка 10%</span></h2>

    <div class="order__description">Оформите заявку на ремонт и мы предоставим скидку 10% на работу мастера</div>


    <div class="row">

      <div class="col-md-8 offset-md-2">

        <form action="javascript();" class="order-form">
          <input type="hidden" name="recepient" value="<?php echo get_option('admin_email'); ?>">
          <input type="hidden" name="blogname" value="<?php echo get_option('blogname'); ?>">

          <div class="row">

            <div class="col-sm-6">

              <div class="order-form__item">
                <input type="text" name="name" placeholder="Ваше имя">
              </div>

              <div class="order-form__item">
                <input type="tel" name="phone" placeholder="Контактный телефон*">
              </div>

              <div class="order-form__item">
                <input type="text" name="model" placeholder="Модель устройства">
              </div>

            </div>
            <div class="col-sm-6">
              <div class="order-form__item">
                <textarea rows="5" name="problem" placeholder="Что случилось с Вашим устройством?"></textarea>
              </div>
            </div>
          </div><!-- row -->

          <div class="alert message hidden" style="display: none;" role="alert"></div>
          <div class="order-form__item">
            <input class="btn btn-primary order-form__submit" type="submit" value="Отправить заявку">
          </div>
          

        </form>

      </div><!-- col -->

    </div><!-- row -->

  </div><!-- container -->

</div><!-- order -->
