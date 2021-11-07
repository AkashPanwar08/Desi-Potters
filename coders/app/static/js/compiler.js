  var url_ ;
  var input = jQuery('#test-input').text();
  var output = jQuery('#test-output').text()



  function makePostRequest(path, btn) {
    return new Promise(function (resolve, reject) {
      var codeValue = globalVariable.editorCodeBlock.getValue();
      if(btn == 'submit'){
        input = jQuery('#hidden-input').text();
        output = jQuery('#hidden-output').text();
      }

      const data = {
          "source_code": codeValue,
          "language_id": judgeLangId,
          "stdin": input,
          "expected_output": output,
        }

      fetch(path,{
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
      })
      .then((response)=> {
        return response.json();
      })
      .then((data) => {
          url_ = 'http://localhost:2358//submissions/' + data.token + '?base64_encoded=false&fields';
          if(btn == 'run')
            jQuery('#result').html('Processing...');
          else if(btn == 'submit')
            jQuery('#submit').html("<div class='footer text-center mt-4'>Processing...</div>");
          resolve(url_);
        },
          (error) => {
          reject(error);
        }
      );
    });
  }

  function makeGetRequest(path) {
    return new Promise(function (resolve, reject) {
      fetch(path)
      .then((response)=> {
        return response.json();
      })
      .then((data) => {
          var result = data;
          resolve(result);
        },
          (error) => {
          reject(error);
        }
      );
    });
  }
  async function run(btn) {
    var url = 'http://localhost:2358/submissions/?base64_encoded=false&wait=false';
    var result_url = await makePostRequest(url, btn);
    var result = await makeGetRequest(result_url);
    var submitted = false;
    while (result.status.id == 1 || result.status.id == 2)
    result = await makeGetRequest(result_url);
    if(btn == 'run'){
      jQuery('#result').html("<pre>" + result.stdout + "</pre>");
      if (result.status.description == 'Accepted')
        jQuery('#status').html("<div class='footer text-success''>" + result.status.description + "</div>");
      else
        jQuery('#status').html("<div class='footer text-danger''>" + result.status.description + "</div>");
    }
    else if(btn == 'submit') {
      if (result.status.description == 'Accepted'){
        jQuery('#submit').html("<div class='footer text-success text-center mt-4'>Solution submited</div>");
        submitted = true;
      }
      else
        jQuery('#submit').html("<div class='footer text-center text-danger mt-4'>Hidden test case failed</div>");
    }

    /* Sending student solution details on the server */
    var server_data = {
      "judge_language_id": judgeLangId,
      "monaco_language_id": responseLang,
      "content": codeContent,
      "problem_id": problem_id,
      "submitted": submitted,
    }
    fetch("solution",{
      method: 'POST',
      headers: {
        'Content-Type': 'application/json',
      },
      body: JSON.stringify(server_data),
    })
    .then((response)=> {
      return (response.text());
    })
    .then((response)=> {})
  }
  