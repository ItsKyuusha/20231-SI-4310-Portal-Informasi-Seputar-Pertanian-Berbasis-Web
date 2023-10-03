document.addEventListener("DOMContentLoaded", function() {
    const questionForm = document.getElementById("question-form");
    const replyForm = document.getElementById("reply-form");
    const submitQuestionButton = document.getElementById("submit-question");
    const submitReplyButton = document.getElementById("submit-reply");
    const forumPostContainer = document.getElementById("forum-post-container");
    const questionTextarea = document.getElementById("question");
    const replyTextarea = document.getElementById("reply");

    submitQuestionButton.addEventListener("click", function() {
        const questionText = questionTextarea.value.trim();
        if (questionText !== "") {
            const questionPost = createPost("Pertanyaan", questionText);
            forumPostContainer.appendChild(questionPost);
            questionTextarea.value = "";
        }
    });

    submitReplyButton.addEventListener("click", function() {
        const replyText = replyTextarea.value.trim();
        if (replyText !== "") {
            const replyPost = createPost("Balasan", replyText);
            forumPostContainer.appendChild(replyPost);
            replyTextarea.value = "";
        }
    });

    function showReplyForm(questionId) {
        // ...
        // Tambahkan elemen input tersembunyi untuk menyimpan ID pertanyaan
        replyForm.querySelector("#question-id").value = questionId;
        // ...
    }

    function submitReply() {
        // ...
        // Dapatkan ID pertanyaan dari input tersembunyi
        const questionId = replyForm.querySelector("#question-id").value;
        
        // Dapatkan teks balasan dari textarea
        const replyText = replyForm.querySelector("#reply").value;
    
        // ...
    
        // Tampilkan detail pertanyaan dalam balasan
        const replyDiv = document.createElement("div");
        replyDiv.classList.add("forum-reply");
        replyDiv.innerHTML = `
            <p>${replyText}</p>
            <p class="reply-info">Balasan untuk pertanyaan: ${questions[questionId]}</p>
            <button class="reply-button" onclick="showReplyForm(${questionId})">Balas</button>
        `;
    
        // ...
    
        // Bersihkan teks di textarea
        replyForm.querySelector("#reply").value = "";
        
        // ...
    }
    

    function createPost(type, text) {
        const postDiv = document.createElement("div");
        postDiv.classList.add("forum-post");

        const typeParagraph = document.createElement("p");
        typeParagraph.innerHTML = `<strong>${type}:</strong>`;

        const textParagraph = document.createElement("p");
        textParagraph.textContent = text;

        const button = document.createElement("button");
        button.classList.add("reply-button");
        button.textContent = "Balas";

        postDiv.appendChild(typeParagraph);
        postDiv.appendChild(textParagraph);
        postDiv.appendChild(button);

        button.addEventListener("click", function() {
            replyForm.classList.toggle("hidden");
        });

        return postDiv;
    }
});
