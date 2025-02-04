<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Call</title>
    <script src="https://meet.jit.si/external_api.js"></script>
</head>
<body>
    <h2>Welcome to the Meeting</h2>
    <div id="meet"></div>
    <button onclick="toggleScreenShare()">Share Screen</button>

    <script>
        const domain = "meet.jit.si";
        const options = {
            roomName: "Rahul1234", 
            width: "100%",
            height: 600,
            parentNode: document.querySelector("#meet"),
            userInfo: {
                displayName: "{{ auth()->user()->name }}"
            }
        };
        const api = new JitsiMeetExternalAPI(domain, options);

        function toggleScreenShare() {
            api.executeCommand('toggleShareScreen');
        }
    </script>
</body>
</html>
