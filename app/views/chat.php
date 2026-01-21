<?php
// app/views/chat.php
// Header & footer includes removed to avoid path errors
// You can add them back later once the correct path is found
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot - Dar Lmaalem</title>
    <!-- Reuse your existing styles if possible -->
    <link rel="stylesheet" href="http://localhost/artisan-academy/public/assets/css/style.css">
    <link rel="stylesheet" href="http://localhost/artisan-academy/public/assets/css/home.css">
    <!-- Optional: quick inline styles to make it look decent without layout -->
    <style>
        body { font-family: Arial, sans-serif; background: #f8f9fa; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 40px auto; }
        .card { border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.15); }
        #messages { background: white; }
        .bg-primary-subtle { background-color: #e3f2fd !important; }
        .bg-light { background-color: #f8f9fa !important; }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center mb-4">Moroccan Artisanat Chatbot</h2>

    <div id="chatbox" class="card mx-auto">
        <div class="card-header bg-primary text-white text-center py-3">
            Assistant
        </div>
        
        <div id="messages" class="card-body p-3" 
             style="min-height: 400px; max-height: 600px; overflow-y: auto;">
            <!-- Messages appear here -->
        </div>

        <div class="card-footer">
            <div class="input-group">
                <input type="text" id="messageInput" class="form-control" 
                       placeholder="Posez votre question (salam, kifach nbii3, zellij...)">
                <button class="btn btn-primary" type="button" onclick="sendMessage()">
                    Envoyer
                </button>
            </div>
        </div>
    </div>
</div>

<script>
const user_id = "<?php echo $_SESSION['user']['id'] ?? 'guest'; ?>";

function appendMessage(sender, text) {
    const container = document.getElementById('messages');
    const msgDiv = document.createElement('div');
    msgDiv.className = `mb-3 p-3 rounded ${sender === 'Vous' ? 'bg-primary-subtle ms-auto text-end' : 'bg-light me-auto'}`;
    msgDiv.style.maxWidth = '80%';
    msgDiv.innerHTML = `<strong>${sender} :</strong><br>${text.replace(/\n/g, '<br>')}`;
    container.appendChild(msgDiv);
    container.scrollTop = container.scrollHeight;
}

async function sendMessage() {
    const input = document.getElementById('messageInput');
    const message = input.value.trim();
    if (!message) return;

    appendMessage('Vous', message);
    input.value = '';

    try {
        const response = await fetch('http://127.0.0.1:8000/chat', {
            method: 'POST',
            headers: { 'Content-Type': 'application/json' },
            body: JSON.stringify({ message, user_id })
        });

        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }

        const data = await response.json();
        appendMessage('Bot', data.reply);
    } catch (error) {
        console.error('Chat error:', error);
        appendMessage('Bot', 'Désolé, impossible de contacter le chatbot pour le moment 😔');
    }
}

// Press Enter to send
document.getElementById('messageInput').addEventListener('keypress', function(e) {
    if (e.key === 'Enter') {
        e.preventDefault();
        sendMessage();
    }
});
</script>

</body>
</html>