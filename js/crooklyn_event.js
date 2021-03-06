
function onClickEditor(root_url, stageName, currency_slug) {
    var url = root_url + "editors/" + stageName + "/" + currency_slug;
    window.open(url, '_blank');
}

function onClickTrack(root_url, track_id) {
    var url = root_url + "tracks/list/" + track_id;
    window.open(url, '_blank');
}

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
      
function onClickContact(root_url) {
    let username = $('#name').val();
	let userEmail = $('#email').val();
	let emailSubject = $('#subject').val();
	let emailBody = $('#message').val();
    // validation
    let validation = true;
    if (!username || username.length === 0) {
        validation = false;
    }
    if (!userEmail || userEmail.length === 0) {
        validation = false;
    }
    if (!emailSubject || emailSubject.length === 0) {
        validation = false;
    }
    if (!emailBody || emailBody.length === 0) {
        validation = false;
    }
    if (validation) {
        if (!validateEmail(userEmail)) {
            alert("Please make sure you provide a valid email address or we can't get back to you");
        } else {
            let body = {
                username: username,
                userEmail: userEmail,
                emailSubject: emailSubject,
                emailBody: emailBody
            };
            $.post(root_url + "api/v1/members/account/contact",
            body,
            function(data, status){
                console.log("data = ", data, "status = ", status);
                if (status == 'success') {
                    if (data.status == 'fail') {
                        alert("Something went wrong!!!");
                    } else {
                        alert("Successfully submitted your request!");
                    }
                } else {
                    alert("Something went wrong!!!");
                }
            });
        }
    } else {
        alert('Please make sure you filled all required(*) fields!');
    }
}
