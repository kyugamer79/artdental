function commentReply() {
    const replyButtons = document.querySelectorAll('.reply-comment');
    const commentFormParent = document.querySelector('#commentform #comment_parent');


    if (!commentFormParent || !replyButtons) return;


    replyButtons.forEach((element) => {

        element.addEventListener('click', () => {
            commentFormParent.value = element.getAttribute('comment-id');
        })
    })
}

commentReply();