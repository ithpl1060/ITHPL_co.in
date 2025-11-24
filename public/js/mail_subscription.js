// Mail Subscription AJAX Handler
document.addEventListener('DOMContentLoaded', function() {
    const mailForm = document.getElementById('mailSubscriptionForm');
    
    if (mailForm) {
        mailForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const emailInput = document.getElementById('subscriptionEmail');
            const email = emailInput.value.trim();
            
            // Log to console
            // console.log('Submitting subscription email:', email);
             // Get current page name from URL

            const currentPath = window.location.pathname;

            const pageName = currentPath.split('/').filter(Boolean).pop() || 'home';
           //console.log('From page:', pageName);
            
            // // Get base URL
            // const baseUrl = window.location.origin + '/' + window.location.pathname.split('/')[1];
            // const submitUrl = baseUrl + '/subscribeMail';
            const submitUrl = '/subscribeMail';
            
            // Send AJAX request
            fetch(submitUrl, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: new URLSearchParams({
                    email: email,
                    source_page: pageName,
                    referrer: document.referrer || 'direct'
                })
            })
            .then(response => {
             //  console.log('Response status:', response.status);
                
                if (response.status === 204 || response.ok) {
                 //  console.log('Email subscribed successfully:', email);
                    emailInput.value = '';
                    return response;
                } else if (response.status === 400) {
                    console.error('Invalid email format');
                    throw new Error('Invalid email format');
                } else {
                    console.error('Server error - status:', response.status);
                    throw new Error('Server error');
                }
            })
            .catch(error => {
                console.error('Subscription error:', error.message);
            });
        });
    }
});
