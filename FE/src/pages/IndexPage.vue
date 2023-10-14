<template>
  <q-page>
    <div class="row">
      <div class="col-8 q-mx-auto q-mt-xl">
        <!-- showcase -->
        <div id="showcase" class="row items-center">
          <div class=" col-12 col-md-6 q-gutter-y-xl">
            <q-img :src="url" spinner-color="white" style="max-width: 350px;" />
            <q-img :src="group" spinner-color="white" style="max-width: 350px;" />
          </div>
          <div class=" col-12 col-md-6 kalameh text-white items-center" style="direction: rtl;">
            <h1>روزگفت</h1>
            <p class="text-body1">سلام! خوش آمدید به "روزگفت"، یک سرویس تخصصی در زمینه سلامت روان و بهبود کیفیت زندگی.
              "روزگفت" به عنوان یک
              منبع کامل و معتبر برای اطلاعات، منابع و مشاوره‌های مرتبط با سلامت روان شما طراحی شده است تا به شما در مسیر
              بهتر شدن و بهبود دادن سلامت روانتان یاری رساند.</p>
          </div>
        </div>
        <!-- why roozgoft -->
        <div id="whyroozgoft" class="row text-white kalameh items-center q-mb-xl" style="margin-top: 100px;">
          <div class="col-12 col-md-6">
            <div class="">
              <div class="flex justify-center q-my-md" style="border: 1px ; border-radius:100px;text-align: center;">
               <video id="video" controls>
                <source src="intro.mp4" type="video/mp4">
               </video>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 q-gutter-y-lg" style="direction: rtl;">
            <h1 class="text-h4">چرا روزگفت؟</h1>
            <p class="text-body1">
              سلامت روان از اهمیت بسیاری برخوردار است و بر روی کیفیت زندگی ما تاثیر می‌گذارد. با این وجود، اغلب افراد
              نیازمند
              راهنمایی و پشتیبانی در این زمینه هستند.
            </p>
          </div>
        </div>
        <!-- roudmaps -->
        <div class="q-mx-auto q-my-xl">
          <h1 class="text-h4 text-white kalameh text-center">نقشه های بهبودی</h1>
          <div class="row kalameh q-col-gutter-md justify-center">

            <div class="col-12 col-sm-3">
              <q-card class="my-card text-yellow-11 text-center"
                style="background-color: #27220B;  box-shadow: 0px 0px 5px 1px #fce9b589;">
                <div>
                  <img src="meditation.png">
                </div>
                <q-card-section class="text-h5">
                  <div>مدیتیشن</div>
                  <div>Meditation</div>
                </q-card-section>
              </q-card>
            </div>

            <div class="col-12 col-sm-3">
              <q-card class="my-card text-center"
                style="color: #A2C6DB;background-color: #222A2F;  box-shadow: 0px 0px 5px 1px #579abc76;">
                <div>
                  <img src="depression.png">
                </div>
                <q-card-section class="text-h5">
                  <div>افسردگی</div>
                  <div>Depression</div>
                </q-card-section>
              </q-card>
            </div>

            <div class="col-12 col-sm-3">
              <q-card class="my-card text-center"
                style="color: #BDADD3;background-color: #2b283175;box-shadow: 0px 0px 5px 1px #7A5DA6;">
                <div>
                  <img src="anxiety.png">
                </div>
                <q-card-section class="text-h5">
                  <div>اضطراب</div>
                  <div>Anxiety</div>
                </q-card-section>
              </q-card>
            </div>

            <div class="col-12 col-sm-3">
              <q-card class="my-card text-center"
                style="color: #FEA9B2;background-color: #332326;box-shadow: 0px 0px 5px 1px rgba(122, 93, 166, 0.667);">
                <div>
                  <img src="adhd.png">
                </div>
                <q-card-section class="text-h5">
                  <div>پیش فعالی</div>
                  <div>ADHD</div>
                </q-card-section>
              </q-card>
            </div>

          </div>
        </div>

        <!-- comments -->
        <div class="q-my-xl">
          <div>
            <h1 class="kalameh text-h4 text-center text-white">تجربه کاربران</h1>
          </div>
          <div class="row kalameh q-gutter-md justify-center text-white" style="direction: rtl;">

            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1" style="background-color: #1E1E1E;">
                <q-card-section>
                  "من از وبسایت "روزگفت" برای مطالعه مقالات و دسترسی به منابع در مورد سلامت روان استفاده می‌کنم و باید
                  بگویم که اطلاعاتی که ارائه می‌دهند بسیار کاربردی هستند. طراحی سایت هم بسیار زیبا و کاربرپسند است."
                </q-card-section>
              </q-card>
            </div>
            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1" style="background-color: #1E1E1E;">
                <q-card-section>
                  "سرویس "روزگفت" برای من به عنوان یک جایگاه تخصصی برای مشاوره در زمینه سلامت روان ارزشمند بوده است. من با
                  یکی از مشاوران این سرویس کار کردم و تجربه بسیار مثبتی داشتم. اینجا برای من به یک فضای امن برای صحبت کردن
                  تبدیل شده است." </q-card-section>
              </q-card>
            </div>
            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1" style="background-color: #1E1E1E;">
                <q-card-section>
                  "سرویس "روزگفت" برای من تبدیل به یک منبع بسیار مفید برای بهبود سلامت روان شده است. مقالات آموزشی و
                  مشاوره‌های آنلاینی که ارائه می‌دهند، واقعاً کمکم کرده‌اند تا با چالش‌هایم در این زمینه بهتر کنار بیایم."
                </q-card-section>
              </q-card>
            </div>
            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1" style="background-color: #1E1E1E;">
                <q-card-section>
                  من از "روزگفت" به عنوان یک منبع راهنمایی و پشتیبانی برای تغییرات مثبت در زندگی انسان‌ها بسیار مفید است.
                  من با تیم پشتیبانی ارتباط داشتم و آنها بسیار حرفه‌ای و دلسوز به من پاسخ دادند. این سرویس را به دیگران
                  نیز پیشنهاد می‌کنم."
                </q-card-section>
              </q-card>
            </div>
          </div>
        </div>

        <!-- footer -->
        <div class="q-my-xl text-center kalameh text-white">
          <h6>تمامی حقوق وبسایت متعلق به روزگفت می باشد.</h6>
        </div>
      </div>
    </div>


  </q-page>
</template>

<script>
import { defineComponent } from 'vue'

export default defineComponent({
  name: 'IndexPage',
  setup() {
    const url = 'logo.png';
    const group = 'group.png'
    return { url, group }
  }
})
</script>
