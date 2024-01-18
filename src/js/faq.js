import { gsap } from "gsap";

document.addEventListener('DOMContentLoaded', () => {
    // Toggle Questions and Answers when the title is clicked
    const titles = document.querySelectorAll('.title');
    const allContents = document.querySelectorAll('.contents');
    const allAnswers = document.querySelectorAll('.answer');
    const allQuestionImages = document.querySelectorAll('.question img');

    titles.forEach(title => {
        title.addEventListener('click', () => {
            const id = title.dataset.id;
            const contents = document.querySelector('.contents[data-id="' + id + '"]');

            // Close all other contents
            allContents.forEach(content => {
                if (content !== contents) {
                    gsap.to(content, { duration: 0.4, height: 0, ease: 'power3.inOut' });
                }
            });

            // Close all answers
            allAnswers.forEach(answer => {
                gsap.to(answer, { duration: 0.4, height: 0, ease: 'power3.inOut' });
            });

            // Reset all question images
            allQuestionImages.forEach(img => {
                gsap.to(img, { duration: 0.4, rotate: '0deg' });
            });

            // Toggle the clicked content
            if (contents.classList.contains('active')) {
                gsap.to(contents, { duration: 0.4, height: 0, ease: 'power3.inOut' });
                contents.classList.remove('active');
            } else {
                gsap.to(contents, { duration: 0.4, height: 'auto', ease: 'power3.inOut' });
                contents.classList.add('active');
            }
        });
    });

    // Toggle Answers when the image next to the question is clicked
    const questionImages = document.querySelectorAll('.question img');
    questionImages.forEach(img => {
        img.addEventListener('click', () => {
            const answer = img.closest('.content').querySelector('.answer');
            if (answer.classList.contains('active')) {
                gsap.to(answer, { duration: 0.4, height: 0, ease: 'power3.inOut' });
                answer.classList.remove('active');
                gsap.to(img, { duration: 0.4, rotate: '0deg' });
            } else {
                gsap.to(answer, { duration: 0.4, height: 'auto', ease: 'power3.inOut' });
                answer.classList.add('active');
                gsap.to(img, { duration: 0.4, rotate: '180deg' });
            }
        });
    });
});

