
<script setup>
import { onMounted, reactive } from 'vue'
import { BriefcaseMedical,Eye,Mail,MapPin,Phone,Facebook,Instagram,Github,Linkedin } from "lucide-vue-next";
const images = reactive([
  { image: "/assets/images/php.svg", title: "PHP" },
  { image: "/assets/images/laravel.svg", title: "Laravel" },
  { image: "/assets/images/mysql.svg", title: "MySQL" },
  { image: "/assets/images/postgresql.svg", title: "PostgreSQL" },
  { image: "/assets/images/git.svg", title: "Git" },
  { image: "/assets/images/html.svg", title: "HTML" },
  { image: "/assets/images/css.svg", title: "CSS" },
  { image: "/assets/images/js.svg", title: "JavaScript" },
  { image: "/assets/images/tailwind.svg", title: "Tailwind CSS" },
  { image: "/assets/images/bootstrap.svg", title: "Bootstrap" }
]);

import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide, Pagination, Navigation } from 'vue3-carousel'

// Define carousel settings
const carouselConfig = reactive({
 itemsToShow: 6, // Show 2 images at a time
  wrapAround: true, // Enable infinite scrolling
  autoplay: true, // Autoplay enabled
  autoplayInterval: 1, // Time between each slide (1 second)
  pauseAutoplayOnHover: false, // Keep autoplay even when hovered
  transition: 5000, // Speed of transition (1 second):
//   itemsToScroll:1
})

// Mounted lifecycle hook in <script setup>
onMounted(() => {
  console.log('Component mounted.')
})
</script>
<template>
    <section>
        <div class="header">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#resume">Resume</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </section>
    <section>
        <div class="banner-section container" id="banner">
            <div class="row">
                <div class="col-6">
                    <div class="left-banner">
                        <div class="banner-img">
                            <img width="300" height="300" src="/assets/images/waheed.png" alt="">
                        </div>
                         <div class="social-media">
                         <Phone class="icon phone" />
                        <Facebook class="icon facebook" />
                        <Instagram class="icon instagram" />
                        <Github class="icon github" />
                        <Linkedin class="icon linkedin" />
                        <Mail class="icon mail" />
                    </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="right-banner">
                        <div class="banner-content">
                            <h4>Full-Stack Developer</h4>
                            <h1>Waheed Akhtar</h1>
                            <p> Driving Business Growth through Scalable Web Solutions | Full-Stack Backend Developer specializing in PHP, Laravel | Skilled in API Design & Integration, SQL, and Performance Optimization | Building Dynamic and Efficient Applications Tailored to Business Needs | Leveraging Modern Technologies for Robust and Secure Web Development | Creating Innovative Digital Solutions for Complex Challenges.</p>
                        </div>
                        <div class="right-banner-btn mt-5">
                            <a href="#">Download CV</a>
                            <a href="#">Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="about-section container" id="about">
            <div class="row">
                <div class="col-6">
                   <div class="about-left">
                        <div class="about-content">
                            <h1>Who I am</h1>
                             <p>
                               I am a Software Developer working as a Full-Stack Backend Developer specializing in PHP and Laravel. With expertise in building robust web applications, I focus on developing efficient backend systems, designing and integrating APIs, and optimizing database performance. My experience includes developing secure authentication systems, managing complex data operations, and ensuring seamless frontend interactions. I hold a Bachelor's degree in Computer Science from Hazara University Mansehra, providing a strong foundation in software development. I'm committed to delivering high-quality solutions tailored to your business needs. Let's collaborate to bring your vision to life.
                            </p>
                        </div>
                   </div>
                </div>
                <div class="col-6">
                    <div class="about-right">
                        <div class="about-img">
                            <img src="https://husnianhashmi.vercel.app/static/media/yellowTheme-boy.9ddb06c0e51b2003539aa3fc76caeaed.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="skill-section container">
            <div class="heading">
                <h1>SKILLS</h1>
            </div>
            <Carousel v-bind="carouselConfig">
                <Slide v-for="(item, index) in images" :key="index">
                    <div class="carousel__item">
                        <img :src="item?.image" alt="carousel image" style="width:150px; height:100px;">
                        <h3 style="text-align:center; margin-top:10px;">{{ item?.title }}</h3>
                    </div>
                </Slide>
            </Carousel>
        </div>
    </section>
    <section>
        <div class="experience-section container">
            <div class="heading">
                <h1>EXPERIENCE</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="experience-img">
                        <img src="assets/images/experience.svg" alt="">
                    </div>
                </div>
                <div class="col-6">
                    <div class="experience-content">
                        <div class="experience-box">
                        <BriefcaseMedical size="50" />
                           <div class="inner-box">
                                <h6>20-11-2022</h6>
                                <h3>Full Stack Developer</h3>
                                <p>Probyte</p>
                           </div>
                        </div>
                         <div class="experience-box">
                             <BriefcaseMedical size="50" />
                            <div class="inner-box">
                                <h6>20-11-2022</h6>
                                <h3>Full Stack Developer</h3>
                                <p>IT Extension</p>
                            </div>
                        </div>
                         <div class="experience-box">
                            <BriefcaseMedical size="50" />
                            <div class="inner-box">
                                 <h6>20-11-2022</h6>
                                <h3>Full Stack Developer</h3>
                                <p>MentorSol</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <section>
        <div class="project-section container">
            <div class="heading">
                <h1>PROJECTS</h1>
            </div>
              <div class="projects-boxes">
                <div class="row">
                    <div class="col">
                        <div class="pro">
                            <h4>HealthCare WebApp</h4>
                            <div class="pro-img">
                                <img src="" alt="">
                            </div>
                            <div class="short-desc">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam nam minima consequuntur, ducimus totam dolorem, perspiciatis</p>
                            </div>
                            <div class="pro-btn">
                                <Eye/>
                            </div>
                        </div>
                    </div>
                <div class="col">
                    <div class="pro">
                        <h4>Charity WebApp</h4>
                        <div class="pro-img">
                            <img src="" alt="">
                        </div>
                        <div class="short-desc">
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam nam minima consequuntur, ducimus totam dolorem, perspiciatis</p>
                        </div>
                        <div class="pro-btn">
                            <Eye/>
                        </div>
                    </div>
                </div>
                <div class="col">
                     <div class="pro">
                        <h4>ECommerce WebApp</h4>
                        <div class="pro-img">
                                <img src="" alt="">
                            </div>
                            <div class="short-desc">
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam nam minima consequuntur, ducimus totam dolorem, perspiciatis </p>
                            </div>
                            <div class="pro-btn">
                                <Eye/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section>
        <div class="service-section container" id="services">
            <div class="heading">
                <h1>SERVICES</h1>
                <div class="short-desc">
                    <p>I build scalable, high-performance web applications, handling everything from frontend design to backend architecture, API integration, and database management.</p>
                </div>
            </div>
              <div class="service-boxes">
                <div class="row">
                    <div class="col">
                        <div class="service">
                            <h4>Web Development</h4>
                            <div class="service-img">
                                <img src="" alt="">
                            </div>
                            <div class="short-desc">
                               <ul>
                                <li>Custom Websites & Web Applications</li>
                                <li>Responsive, Mobile-Friendly UI</li>
                                <li>Frontend with Vue.js</li>
                                <li>Backend with php and Laravel</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="service">
                            <h4>API Development & Integration</h4>
                            <div class="service-img">
                                <img src="" alt="">
                            </div>
                            <div class="short-desc">
                               <ul>
                                <li>RESTful & GraphQL API Development</li>
                                <li>Third-Party API Integration (Payment, Social, Maps)</li>
                                <li>Secure Authentication (OAuth, JWT)</li>
                                <li>Backend with php and Laravel</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="service">
                            <h4>Database Design & Management</h4>
                            <div class="service-img">
                                <img src="" alt="">
                            </div>
                            <div class="short-desc">
                               <ul>
                                <li>Database Design & Management</li>
                                <li> Database Schema Design & Optimization</li>
                                <li>Secure Data Storage & Retrieval</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                     <div class="col">
                        <div class="service">
                            <h4>Maintenance & Support</h4>
                            <div class="service-img">
                                <img src="" alt="">
                            </div>
                            <div class="short-desc">
                               <ul>
                                <li>Bug Fixing & Feature Upgrades</li>
                                <li> Security Patches & Performance Monitoring</li>
                                <li>Technical Support & Troubleshooting</li>
                               </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
      <section>
        <div class="education-section container">
            <div class="heading">
                <h1>EDUCATION</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="education-content">
                        <div class="education-box">
                        <BriefcaseMedical size="50" />
                           <div class="inner-box">
                                <h6>SESSION 2017 - 2021</h6>
                                <h3>BACHELOR IN COMPUTER SCIENCE</h3>
                                <p>Hazara University</p>
                           </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="education-img">
                        <img src="assets/images/education.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="contact-section container" id="contact">
            <div class="heading">
                <h1>Contact</h1>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="contact-form">
                        <form action="">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Your Name">
                            <label for="">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="email">
                            <label for=""></label>
                            <textarea name="" id="" cols="30" rows="10" class="form-control">
                                Type your message....
                            </textarea>
                            <button class="btn">Send</button>
                        </form>
                    </div>
                </div>
                <div class="col-6">
                    <div class="info-section">
                        <ul>
                            <li>
                                <Mail />
                                <a href="mailto:waheed47623@gmail.com" >waheed47623@gmail.com</a>
                            </li>
                            <li>
                                <Phone />
                                <a href="tel:+923443634794">+923443634794</a> <!-- Moved the number inside the <a> tag -->
                            </li>
                            <li>
                                <MapPin />
                                <a href="#">Johar Town, Lahore</a>
                            </li>

                        </ul>
                    </div>
                    <div class="social-media">
                         <Phone class="icon phone" />
                        <Facebook class="icon facebook" />
                        <Instagram class="icon instagram" />
                        <Github class="icon github" />
                        <Linkedin class="icon linkedin" />
                        <Mail class="icon mail" />
                    </div>
                </div>
            </div>
        </div>       
    </section>
    <section>
        <div class="footer">
            <p>Made by Waheed Akhtar ♥</p>

        </div>
    </section>
</template>


<style scoped>
.carousel__item {
  background: lightblue;
  padding: 20px;
  text-align: center;
  border-radius: 10px;
}
</style>
