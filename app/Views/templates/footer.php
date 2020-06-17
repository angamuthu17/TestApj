
<!-- FOOTER -->
<footer class="container-fluid bg-secondary p-4">
    <div class="row h-75 align-content-center">
        <div class="col-sm text-center mb-3">
            <a href="https://www.facebook.com/apurposefuljourney"><i class="fa fa-facebook fa-lg mr-4" aria-hidden="true"></i></a>
            <a href="https://twitter.com/joinapj"><i class="fa fa-twitter fa-lg mr-4" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/joinapj"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
        </div>
        <div class="col-sm text-center mb-3">
            <a class="font-weight-bold border-right p-2" href="fefa">#FreeEducation  </a>
            <a class="font-weight-bold border-right p-2" href="joinUs">  JoinUs  </a>
            <a class="font-weight-bold p-2" href="contact">  Contact Us</a>
        </div>
        <div class="col-sm text-center mb-3">
            <a href="mailto:joinapj@gmail.com"><i class="fas fa-envelope mr-2"></i >joinapj@gmail.com</a>
        </div>
    </div>
    <p class="plain-text text-center">&copy; A Purposeful Journey</p>
</footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="https://kit.fontawesome.com/49fa31ba9f.js"></script>

<script>
    window.jQuery || document.write('<script src="assets/js/vendor/jquery.slim.min.js"><\/script>')
</script>

<script src="assets/js/bootstrap.bundle.js"></script></body>
<script src="assets/lib/slider/slideWiz.js"></script>

    <script>

        var mySlides = [
            {
            src: {
                cover: "assets/images/slider/pic8.jpeg"
            },
            title: 'WHO WE ARE? <br/><p class="small font-italic" style="font-size:0.9em;"> APJIEN&apos;s</p>',
            desc: '<b>A Purposeful Journey</b> is a brainchild of group of friends, who came up with thought of saving a small amount every month and give it back to society on need basis during summer 2015.',
            btnTitle: 'Read more',
            button: {
                text: 'Read more',
                url: 'journey', // URL
                class: 'btn btn-sm bg-info text-light '
            }
            },{
            src: {
                cover: "assets/images/slider/pic1.jpeg"
            },
            title: 'Our Mission',
            desc: '<b>A Purposeful Journey</b> aims to help talented children who need help to get quality education and support them to continue their studies.',
            btnTitle: 'Read more',
            button: {
                text: 'Read more',
                url: 'journey', // URL
                class: 'btn btn-sm bg-info text-light '
            }
            },
            {
            src: {
                cover: "assets/images/slider/pic9.jpeg"
            },
            title: 'What We Do <br/><p class="small font-italic" style="font-size:0.9em;"> to keep our mission alive</p>',
            desc: 'We run various program to keep our mission alive.',
            btnTitle: 'Read more',
            button: {
                text: 'Read more',
                url: 'initiatives', // URL
                class: 'btn btn-sm bg-info text-light '
            }
            },
            {
            src: {
                cover: "assets/images/slider/pic2.jpeg"
            },
            title: 'What We Have Done <br/><p class="small font-italic" style="font-size:0.9em;"> to give back the society</p>',
            desc: '20+ Students have got financial support so far to continue their schoolings, Basic English and motivational classes at Government school in Karnataka and.',
            btnTitle: 'Read more',
            button: {
                text: 'Read more',
                url: 'journey', // URL
                class: 'btn btn-sm bg-info text-light '
            }
            },{
            src: {
                cover: "assets/images/slider/pic3.jpeg"
            },
            title: 'What You Can Do With Us <br/><p class="small font-italic" style="font-size:0.9em;"> to join our team and support us</p>',
            desc: 'Please join our team and support us to keep helping people who need supports and bring value in everyone’s life.',
            btnTitle: 'Read more',
            button: {
                text: 'Join Us',
                url: 'journey', // URL
                class: 'btn btn-sm bg-info text-light '
            }
            }
            // more slides here
        ];

        $('.slide-container').slideWiz({
            file: mySlides,
            auto: true,
            speed: 4000, // in ms
            type :'box3D',
            animation : 'slice'
        })

    </script>

</html>
