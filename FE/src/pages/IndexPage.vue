<template>
  <q-page>
    <div class="row">
      <div class="col-8 q-mx-auto q-mt-xl">
        <!-- showcase -->
        <div id="showcase" class="row items-center">
          <div class=" col-12 col-md-6 q-gutter-y-xl logo">
            <q-img :src="url" spinner-color="white" style="max-width: 350px;filter: drop-shadow(0px 0px 5px #077fde);" />
          </div>
          <div class="col-12 col-md-6 q-mx-auto text-white items-center" style="direction: rtl;">
            <div class="title-container kalameh">
              <h1 style="font-weight: 600;">روزگفت</h1>
            </div>
            <p class="text-body1 iransans" style="text-align: justify; direction: rtl;">سلام! خوش آمدید به "روزگفت"، یک
              سرویس تخصصی
              در زمینه سلامت روان و بهبود کیفیت زندگی.
              "روزگفت" به عنوان یک
              منبع کامل و معتبر برای اطلاعات، منابع و مشاوره‌های مرتبط با سلامت روان شما طراحی شده است تا به شما در مسیر
              بهتر شدن و بهبود دادن سلامت روانتان یاری رساند.</p>
          </div>
        </div>
        <!-- why roozgoft -->
        <div id="whyroozgoft" class="row text-white items-center q-mb-xl" style="margin-top: 100px;">
          <div class="col-12 col-md-6">
            <div>
              <div class="flex  justify-md-end justify-xs-center q-my-md"
                style="border: 1px ; border-radius:100px;text-align: center;">
                <video id="video" controls style="width: 400px; border-radius: 10px;">
                  <source src="intro.mp4" type="video/mp4">
                </video>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-6 q-gutter-y-lg" style="direction: rtl;">
            <h1 class="text-h4 q-my-xl kalameh" style="font-weight: 600;">ما اینجاییم تا حالتون رو بهتر کنیم</h1>
            <p class="text-body1 iransans">
              پلتفرم ما به شما و عزیزانتون کمک میکنه تا با سختی های زندگی دست مقابله کنید و ازشون جــــــلــــــو بزنید.
            </p>
          </div>
        </div>
        <!-- roudmaps -->
        <div class="q-my-xl">
          <h1 class="text-h4 text-white kalameh text-center" style="margin-bottom: 70px; font-weight: 600;">نقشه های
            بهبودی</h1>
          <div class="row kalameh q-col-gutter-md justify-center">

            <div class="col-12 col-sm-6 col-lg-3">
              <q-card class="my-card text-yellow-11 text-center "
                style="background-color: #27220B;  box-shadow: 0px 0px 5px 1px #fce9b589;border-radius: 20px;">
                <div>
                  <img src="meditation.png">
                </div>
                <q-card-section class="text-h5">
                  <div>مدیتیشن</div>
                  <div>Meditation</div>
                </q-card-section>
              </q-card>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
              <q-card class="my-card text-center"
                style="color: #A2C6DB;background-color: #222A2F;  box-shadow: 0px 0px 5px 1px #579abc76;border-radius: 20px;">
                <div>
                  <img src="depression.png">
                </div>
                <q-card-section class="text-h5">
                  <div>افسردگی</div>
                  <div>Depression</div>
                </q-card-section>
              </q-card>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
              <q-card class="my-card text-center"
                style="color: #BDADD3;background-color: #2b283175;box-shadow: 0px 0px 5px 1px #7A5DA6;border-radius: 20px;">
                <div>
                  <img src="anxiety.png">
                </div>
                <q-card-section class="text-h5">
                  <div>اضطراب</div>
                  <div>Anxiety</div>
                </q-card-section>
              </q-card>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
              <q-card class="my-card text-center"
                style="color: #FEA9B2;background-color: #332326;box-shadow: 0px 0px 5px 1px rgba(122, 93, 166, 0.667);border-radius: 20px">
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

       

        <!-- برای چه کسانی مناسب است -->
        <q-list bordered class="rounded-borders text-white kalameh" style="background-color: #1E1E1E;direction: rtl; border-radius: 15px;">
          <q-expansion-item switch-toggle-side="left" expand-separator class="text-h6 q-pa-sm" label="برای چه کسانی مناسب است؟">
            <q-card class="bg-dark">  
              <q-card-section class="flex justify-between items-center">
                <p class="q-mb-none">کسانی که...</p>
                <img src="star.svg" alt="svg">
              </q-card-section>
            </q-card>
            <q-card class="bg-dark">  
              <q-card-section class="flex justify-between items-center">
                <p class="q-mb-none">کسانی که...</p>
                <img src="star.svg" alt="svg">
              </q-card-section>
            </q-card>
            <q-card class="bg-dark">  
              <q-card-section class="flex justify-between items-center">
                <p class="q-mb-none">کسانی که...</p>
                <img src="star.svg" alt="svg">
              </q-card-section>
            </q-card>
          </q-expansion-item>
        </q-list>

         <!-- comments -->
        <div class="q-my-xl">
          <div>
            <h1 class="kalameh text-h4 text-center text-white q-my-xl" style="font-weight: 600;">تجربه کاربران</h1>
          </div>
          <div class="row iransans q-gutter-md justify-center text-white" style="direction: rtl;">

            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1 text-justify" style="background-color: #1E1E1E;">
                <q-card-section style="line-height: 30px;">
                  "من از وبسایت "روزگفت" برای مطالعه مقالات و دسترسی به منابع در مورد سلامت روان استفاده می‌کنم و باید
                  بگویم که اطلاعاتی که ارائه می‌دهند بسیار کاربردی هستند. طراحی سایت هم بسیار زیبا و کاربرپسند است."
                </q-card-section>
              </q-card>
            </div>
            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1 text-justify" style="background-color: #1E1E1E;">
                <q-card-section style="line-height: 30px;">
                  "سرویس "روزگفت" برای من به عنوان یک جایگاه تخصصی برای مشاوره در زمینه سلامت روان ارزشمند بوده است. من با
                  یکی از مشاوران این سرویس کار کردم و تجربه بسیار مثبتی داشتم. اینجا برای من به یک فضای امن برای صحبت کردن
                  تبدیل شده است." </q-card-section>
              </q-card>
            </div>
            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1 text-justify" style="background-color: #1E1E1E;">
                <q-card-section style="line-height: 30px;">
                  "سرویس "روزگفت" برای من تبدیل به یک منبع بسیار مفید برای بهبود سلامت روان شده است. مقالات آموزشی و
                  مشاوره‌های آنلاینی که ارائه می‌دهند، واقعاً کمکم کرده‌اند تا با چالش‌هایم در این زمینه بهتر کنار بیایم."
                </q-card-section>
              </q-card>
            </div>
            <div class="col-12 col-md-5 ">
              <q-card class="my-card text-body1 text-justify" style="background-color: #1E1E1E;">
                <q-card-section style="line-height: 30px;">
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

          <div class=" q-mx-auto q-pa-lg" style="max-width: 400px;">
            <q-input type="tel" class=" text-white q-my-sm" bg-color="orange" v-model="mobile" label="moblie" outlined
              ref="mobileRef"
              :rules="[val => !!val || 'لطفا خالی نذار', val => val.length == 10 || 'شماره موبایل اشتباهه', val => typeof val === 'number' || 'لطفا فقط عدد وارد کن']" />
            <q-btn @click="Send" label="ثبت نام" />
          </div>

          <h6 class="" style="font-size: 15px; color: gray;">تمامی حقوق وبسایت متعلق به روزگفت می باشد.</h6>
        </div>
      </div>
    </div>


  </q-page>
</template>

<script>
import { defineComponent, ref } from 'vue'
import { api } from "src/boot/axios";
import { useQuasar } from "quasar";

export default defineComponent({
  name: 'IndexPage',
  setup() {
    const q = useQuasar()
    const url = 'showcase.png';
    const mobile = ref('');
    const mobileRef = ref(null)
    function Send() {
      mobileRef.value.validate()
      if (mobileRef.value.hasError) {
        q.notify({
          message: 'شماره موبایل نادرست وارد شده',
          position: 'top',
          color: 'red'
        })
      } else {
        api.post('api/pre-register', {
          mobile: mobile.value
        }).then(res => {
          console.log(res.data);
          if (res.data.status) {
            q.notify({
              message: 'پیش ثبت نام با موفقیت انجام شد',
              color: 'green',
              position: 'top'
            })
          } else {
            q.notify({
              message: res.data.message,
              color: 'yellow',
              position: 'top'
            })
          }
        }).catch(err => {
          console.log(err);
          if (err)
            q.notify({
              message: 'ارور',
              color: 'red'
            })
        })
      }

    }

    return { url, mobile, Send, mobileRef }
  }
})
</script>
