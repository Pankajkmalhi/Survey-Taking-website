$(document).ready(function() {
  // validate the survey form
  $('#survey-form').validate({
    rules: {
      age: 'required',
      year1: 'required',
      grade: 'required',
      gender: 'required',
      course: 'required',
      question1: 'required',
      question2: 'required',
      question3: 'required',
      question4: 'required',
      question5: 'required',
      question6: 'required',
      question7: 'required',
      question8: 'required',
      question9: 'required',
      question10: 'required'
    },
    messages: {
      age: 'Please select an answer.',
      year1: 'Please select an answer.',
      grade: 'Please select an answer.',
      gender: 'Please select an answer.',
      course: 'Please select an answer.',
      question1: 'Please select an answer.',
      question2: 'Please select an answer.',
      question3: 'Please select an answer.',
      question4: 'Please select an answer.',
      question5: 'Please select an answer.',
      question6: 'Please select an answer.',
      question7: 'Please select an answer.',
      question8: 'Please select an answer.',
      question9: 'Please select an answer.',
      question10: 'Please select an answer.'

    },
    errorElement: 'small',
    errorClass: 'text-danger'
  });

  // handle form submission
  $('#survey-form').submit(function(event) {
    event.preventDefault();

    if ($('#survey-form').valid()) {
      // create an object to store the survey data
      var surveyData = {

        'age': $('input[name="age"]:checked').val(),
        'year1': $('input[name="year1"]:checked').val(),
        'grade': $('input[name="grade"]:checked').val(),
        'gender': $('input[name="gender"]:checked').val(),
        'course': $('input[name="course"]:checked').val(),


        'question1': $('input[name="question1"]:checked').val(),
        'question2': $('input[name="question2"]:checked').val(),
        'question3': $('input[name="question3"]:checked').val(),
        'question4': $('input[name="question1"]:checked').val(),
        'question5': $('input[name="question2"]:checked').val(),
        'question6': $('input[name="question3"]:checked').val(),
        'question7': $('input[name="question1"]:checked').val(),
        'question8': $('input[name="question2"]:checked').val(),
        'question9': $('input[name="question3"]:checked').val(),
        'question10': $('input[name="question3"]:checked').val()

      };

      // make an AJAX request to save the data to the database
      $.ajax({
        type: 'POST',
        url: 'submit.php',
        data: surveyData,
        success: function(response) {
          // display a success message
          $('#survey-form')[0].reset();
          $('#success-message').removeClass('d-none');
        },
        error: function(xhr, status, error) {
          // display an error message
          console.log(error);
        }
      });
    }
  });

  // toggle the survey form visibility
  $('#show-form-button').click(function() {
    $('#survey-form-container').toggleClass('d-none');
  });

  // handle the "back to top" button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#back-to-top-button').fadeIn();
    } else {
      $('#back-to-top-button').fadeOut();
    }
  });

  $('#back-to-top-button').click(function() {
    $('html, body').animate({scrollTop: 0}, 800);
    return false;
  });
});
