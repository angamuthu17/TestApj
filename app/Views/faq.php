<main role="main">
    <div class="container mt-5">
        <div class="jumbotron jumbotron-fluid text-border-big">
            <div class="container">
                <h3 class="font-weight-bold font-italic">Frequently asked questions</h3>
            </div>
        </div>


        <div class="accordion mb-4" id="faqList">
            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingOne">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseOne" 
                        aria-expanded="true" aria-controls="collapseOne">
                        When was this trust started?
                    <span class="float-right"><i class="far fa-minus-square"></i></span>
                    </p>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faqList">
                    <div class="card-body">
                    It was in operation unofficially as support to social activities since 2015 but officially registered as charitable trust in 2017. Please refer <a href='aboutUs#whoWeAre'>About Us</a> page.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingTwo">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseTwo" 
                        aria-expanded="false" aria-controls="collapseTwo">
                        Do I get 80G tax exemption for my contribution?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingOne" data-parent="#faqList">
                    <div class="card-body">
                    Currently, No. We are in the path of getting 12AA and 80G.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingThree">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseThree" 
                        aria-expanded="false" aria-controls="collapseThree">
                        Is there dedicated trust bank account?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingOne" data-parent="#faqList">
                    <div class="card-body">
                    Yes. We have bank account for our trust and members can contribute directly to it. Our account gets audited every year.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingFour">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseFour" 
                        aria-expanded="false" aria-controls="collapseFour">
                        Can I find bank details to contribute?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#faqList">
                    <div class="card-body">
                    Please go to <a href="contact">contact</a> page and reach us with your thoughts and interest along with your email id. We will send you all details.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingFive">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseFive" 
                        aria-expanded="false" aria-controls="collapseFive">
                        How can I contribute?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#faqList">
                    <div class="card-body">
                    Please refer <a href="joinUs">'Join Us'</a> page. Please <a href="contact">contact</a> us for more thoughts / suggestions.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingSix">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseSix" 
                        aria-expanded="false" aria-controls="collapseSix">
                        What do I get if I regularly contribute?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faqList">
                    <div class="card-body">
                    Thanks for your willingness. We will give you regular update on our activities and upcoming support program details. You will get access to member page to download various reports and forms.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingEight">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseEight" 
                        aria-expanded="false" aria-controls="collapseEight">
                        What are our different activities?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#faqList">
                    <div class="card-body">
                    Please refer <a href="initiatives">'Our Initiatives'</a> page.
                    </div>
                </div>
            </div>

            <div class="card mb-2 border-bottom">
                <div class="card-header inline-block" id="headingNine">
                    <p class="text-left mb-0" data-toggle="collapse" data-target="#collapseNine" 
                        aria-expanded="false" aria-controls="collapseNine">
                        Where I can see what was achieved so far?
                    <span class="float-right"><i class="far fa-plus-square"></i></span>
                    </p>
                </div>
                <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#faqList">
                    <div class="card-body">
                    Please refer <a href="initiatives">'Our Initiatives'</a> and <a href="aboutUs#apjPrograms">'About Us'</a> page.
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>


<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            
            $('.collapse').on('shown.bs.collapse', function(){
                $(this).parent().find("span > .far").removeClass("fa-plus-square").addClass("fa-minus-square");
            });
            
            $('.collapse').on('hidden.bs.collapse', function(){
                $(this).parent().find("span > .far").removeClass("fa-minus-square").addClass("fa-plus-square");
            });

        }, false);
    })();
    
</script>