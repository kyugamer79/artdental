<!-- reserve popup wrapper مشاوره رایگان  -->
<?php

$services = get_posts([
    'post_type' => 'service',
    'posts_per_page' => -1,

]);

?>




<div class="py-10 backdrop-blur"></div>

<section class="z-50 backdrop-blur w-full h-full fixed inset-0 flex justify-center items-center overflow-hidden">
    <!-- form  -->
    <div class="bg-primary-100 flex justify-center items-center rounded-3xl">
        <!--close form button -->
        <div class="mt-5">
            <!-- <div class="px-5">
            <button class="btn" size="small" id="reservePopUpCloser" variant="secondary">
                <svg class="icon">
                    <use href="#icon-xmark" />
                </svg>
                <//?php pll_e('close') ?>
            </button>
        </div> -->
        </div>
        <form action="/" method="post" class="flex flex-col gap-4 px-5 rounded-3xl mt-5">
            <!-- form inputs  -->
            <div class="flex flex-col gap-4">
                <div class="flex gap-4 w-full max-lg:flex-col">
                    <!--first name and last name -->
                    <div> <input type="text" required="required" placeholder="نام و نام خانوادگی" class="py-1 pr-3 h-9 rounded-3xl border border-primary-80 max-lg:w-full" name="name"></div>
                    <!-- gender  -->
                    <div class="w-full">
                        <select name="gender" id="gender" required class="h-10 text-primary-50 rounded-3xl border border-primary-80 w-full">
                            <option value=""><?php _e('جنسیت', 'cyn-dm') ?></option>
                            <option value="woman"><?php _e('زن', 'cyn-dm') ?></option>
                            <option value="man"><?php _e('مرد', 'cyn-dm') ?></option>
                        </select>
                    </div>
                </div>
                <div class="flex gap-4 w-full max-lg:flex-col">
                    <!-- services  -->
                    <div class="min-h-10 min-w-64">
                        <select name="services" id="services" required class="min-h-10 min-w-64 text-primary-50 rounded-3xl border border-primary-80 w-full">
                            <option value="">خدمات</option>
                            <?php foreach ($services as $index => $service) : ?>
                                <option value="<?php echo $service->post_title ?>">
                                    <?php echo $service->post_title ?>
                                </option>
                            <?php endforeach; ?>





                            
                        </select>
                    </div>
                    <!-- reservation date and time -->
                    <div class="relative flex">

                        <input type="text" onfocus="(this.type='datetime-local')" onblur="(this.type='text')" required="required" placeholder="تاریخ و ساعت رزرو" class="h-9 max-lg:w-full py-1 pr-10 rounded-3xl border border-primary-80 w-full" name="reservation time">

                        <!-- svg  -->
                        <div class="icon absolute text-primary-50">
                            <svg class="icon w-6 h-6">
                                <use href="#icon-calendar-schedule-1" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="flex gap-4 w-full max-lg:flex-col">
                    <!-- phone number   -->
                    <div> <input type="number" required="required" placeholder="تلفن همراه" class="py-0.5 pr-3 h-9 rounded-3xl border border-primary-80 max-lg:w-full" name="phone number"></div>
                    <!-- email -->
                    <div class="w-full"> <input type="mail" required="required" placeholder="ایمیل(اختیاری)" class="py-0.5 pr-3 h-9 rounded-3xl border border-primary-80  w-full" name="email"></div>
                </div>
                <div>
                    <!-- Further Details  -->
                    <div>
                        <div class="relative pr-3">
                            <svg class="icon absolute w-6 h-6 mt-2 text-primary-50">
                                <use href="#icon-Chat,-Messages-1" />
                            </svg>
                        </div>
                        <textarea name="message" id="message" required="required" cols="30" rows="5" placeholder="توضیحات تکمیلی" class="py-1 pr-10 rounded-3xl border border-primary-80 w-full"></textarea>
                    </div>
                </div>
            </div>
            <!-- form button  -->
            <div class="flex items-end justify-end gap-3 max-lg:flex-col max-lg:items-center max-lg:justify-center max-lg:w-full">
                <!-- call button  -->
                <div class="flex items-end justify-end max-lg:items-center max-lg:justify-center max-lg:w-full ">
                    <button class=" border max-lg:w-full max-lg:items-center max-lg:justify-center flex items-center justify-center flex-row-reverse gap-1 rounded-full transition-all py-2 px-4 duration-300 cursor-pointer text-body_s">
                        <div>
                            <a href="tel:021-22443568 tel:021-22443568">
                                <?php _e('تماس', 'cyn-dm') ?></a>
                        </div>
                    </button>
                </div>
                <!-- Schedule a patient button  -->
                <div class="flex items-end justify-end max-lg:items-center max-lg:justify-center max-lg:w-full">
                    <button class="max-lg:w-full max-lg:items-center max-lg:justify-center flex items-end justify-end flex-row-reverse gap-1 rounded-full transition-all duration-300 cursor-pointer
                         bg-gradient-to-t from-primary-50 to-primary-70 text-primary-100 shadow-md shadow-slate-400/50
                          hover:from-primary-20 hover:to-primary-20 py-2 px-4 text-body_s ">
                        <div class="me-2">
                            <?php _e('درخواست نوبت', 'cyn-dm')  ?>
                        </div>
                    </button>
                </div>
            </div>
            <div class="py-1"></div>
        </form>
    </div>


</section>