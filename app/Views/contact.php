<main role="main">
    <div class="container mt-5">
        <div class="jumbotron jumbotron-fluid text-border-big">
            <div class="container">
                <h3> Get in touch</h3>
                <p class="lead">Please write to us with your questions/interests/feedback. Our team will get back to you within 48 hours!</p>
            </div>
        </div>

        <div id="successAlert" class="alert alert-success" role="alert" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading"><i class="far fa-check-circle mr-2 text-success" aria-hidden="true"></i>Done!</h4>
            <p>Thank you for contacting us. We will get back to you shortly.</p>
        </div>
        <div id="errorAlert" class="alert alert-danger" role="alert" style="display:none;">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="alert-heading"><i class="fas fa-exclamation mr-2 text-danger" aria-hidden="true"></i>Uh-oh!</h4>
            <p>Sorry, there seems to be an issue in submitting the feedback. Please try after sometime.</p>
        </div>

        <div class="row mt-4 mb-4">
            <div class="col-md border-rt-secondary border-bottom">
                <div class="mt-4 font-size-13">
                    <span>
                        <label for="emailText">E-mail us to <label>
                        <a href="mailto:joinapj@gmail.com" id="emailText">joinapj@gmail.com</a> 
                    </span>
                    <span class="float-right social-media-links">
                        <a href="https://www.facebook.com/apurposefuljourney"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></a><span class="mr-3"></span>
                        <a href="https://twitter.com/joinapj"><i class="fa fa-twitter fa-lg" aria-hidden="true"></i></a><span class="mr-3"></span>
                        <a href="https://www.instagram.com/joinapj"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></a>
                    </span>
                </div>
                <img src="assets/images/pic8.jpeg" class="img-fluid mt-4 sm-no-display" alt="Responsive image"> 
            </div>
            <div class="col-md mt-4 mb-4">
                <form class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="firstName">First name <span class="text-danger small">*</span></label>
                            <input type="text" class="form-control" id="firstName" placeholder="First name" pattern="^[A-Za-z ]+$" required />
                            <div class="invalid-feedback">
                                Please enter your first name.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="lastName">Last name <span class="text-muted small">(optional)</span></label>
                            <input type="text" class="form-control" id="lastName" placeholder="Last name" pattern="^[A-Za-z ]+$"/>
                            <div class="invalid-feedback">
                                Please enter a valid name.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="contactEmail">Email address <span class="text-danger small">*</span></label>
                            <input type="email" class="form-control" id="contactEmail" placeholder="name@example.com" required>
                            <div class="invalid-feedback">
                                Please a valid e-mail address.
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone">Mobile number <span class="text-muted small">(optional)</span></label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="phonePrepend">+91</span>
                                </div>
                                <input type="" class="form-control" id="phone" placeholder="987XXXXXXX" aria-describedby="phonePrepend" pattern="[0-9]{10}">
                                <div class="invalid-feedback">
                                    Please enter a valid mobile number.
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md mb-3">
                            <label for="subject">Subject <span class="text-danger small">*</span></label>
                            <select class="form-control" id="subject" required>
                                <option value="">-- Select --</option>
                                <option value="onlineClass">Feedback / suggestion regarding free online classes</option>
                                <option value="joining">Feedback / suggestion regarding joining a initiative</option>
                                <option value="contribution">Feedback / suggestion regarding contributing</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select the subject.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md mb-3">
                            <label for="userMessage">Your message <span class="text-danger small">*</span></label>
                            <textarea class="form-control" id="userMessage" rows="5" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message / feedback.
                            </div>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col-md mb-3">
                            <button id="submitButton" type="submit" class="btn btn-outline-info w-100" onClick="submitFeedback();">
                                <span id="btn-txt-submit">Submit</span>
                                <span id="btn-txt-loadSubmit">
                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                    Submitting...
                                </span>
                            </button>
                        </div>
                        <div class="col-md mb-3">
                            <button type="reset" class="btn btn-outline-secondary w-100" onClick="resetForm();">Reset</button>
                        </div>
                    </div>
                    <span class="text-danger small">* Required field</span>
                </form>    
            </div>
        </div>
    </div>
</main>


<script>
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            //hide
            $('#successAlert').hide();
            $('#errorAlert').hide();
            $('#btn-txt-loadSubmit').hide();

        }, false);
    })();
      
    function submitFeedback()
    {

        disableSubmit();

        // Check validity
        var form = document.getElementsByClassName('needs-validation')[0];
        if (form.checkValidity() === false) 
        {
            event.preventDefault();
            event.stopPropagation();

            form.classList.add('was-validated');
            enableSubmit();
            return false;
        }
        
        $.ajax({
            type: 'post',
            url: 'doFeedbackSubmit',
            data: $('.needs-validation').serialize(),
            success: function () {
                $('#successAlert').show();
                enableSubmit();
                $('html, body').animate({
                    scrollTop: $(".jumbotron").offset().top
                }, 1000);
            },
            error: function () {
                $('#errorAlert').show();
                enableSubmit();
                $('html, body').animate({
                    scrollTop: $(".jumbotron").offset().top
                }, 1000);
            }
        });

        return false;
    }

    function enableSubmit()
    {
        $('#submitButton').removeAttr('disabled');
        $('#btn-txt-loadSubmit').hide();
        $('#btn-txt-submit').show();
    }

    function disableSubmit()
    {
        $('#submitButton').attr('disabled','disabled');
        $('#btn-txt-submit').hide();
        $('#btn-txt-loadSubmit').show();
    }

    function resetForm()
    {
        $('#successAlert').hide();
        $('#errorAlert').hide();
        $('#btn-txt-loadSubmit').hide();
        var form = document.getElementsByClassName('needs-validation')[0];
        form.reset();
        form.classList.remove('was-validated');
    }
</script>