<!DOCTYPE html>
<head>
    <title>Pusher Test</title>
    <script src="https://js.pusher.com/3.0/pusher.min.js"></script>
    <script>
        // Enable pusher logging - don't include this in production
        Pusher.log = function(message) {
            if (window.console && window.console.log) {
                window.console.log(message);
            }
        };

        var pusher = new Pusher('ed4035f96559a3efbd43', {
            encrypted: true
        });

        var channel = pusher.subscribe('notification');
        channel.bind('new-order', function(data) {
            alert(data.message);
        });
    </script>
<body>
    Notification
</body>
</head>
