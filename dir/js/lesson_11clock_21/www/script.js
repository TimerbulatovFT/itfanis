/* Классы и создание экземпляра объекта */
class Comment {
    constructor (text){
        this.text = text;
        this.votesQty = 0;
    }

    upvote (){
        this.votesQty +=1;
    }
/* Статический метод */
    static mergeComments(firstComment, secondComment){
        return `${firstComment} -!- ${secondComment}`;
    }

}

/* Оператор instanceof в JavaScript используется для проверки типа объекта во время выполнения. Он возвращает логическое значение если true то это указывает на то что объект является экземпляром определенного класса а если false то это не так. */

const firstComment = new Comment ('First comment');
document.write(firstComment.text, '<br>');
firstComment.upvote();
document.write(firstComment.votesQty, '<br>');
firstComment.upvote();
document.write(firstComment.votesQty, '<br>');
firstComment.upvote();
document.write(firstComment.votesQty, '<br>');
document.write(firstComment instanceof Comment, '<br>');
document.write(firstComment instanceof Object, '<br>');

/* Метод hasOwnProperty () возвращает логическое значение, указывающее, содержит ли объект указанное свойство. Синтаксис. obj .hasOwnProperty (prop) Параметры. prop. Имя проверяемого свойства. */
document.write(firstComment.hasOwnProperty('text'), '<br>');
document.write(firstComment.hasOwnProperty('votesQty'), '<br>');

const twoComment = new Comment ('Second comment');
const treeComment = new Comment ('Third comment');
document.write(twoComment.text, '<br>');
for (i=10; i<21; i++) {
    twoComment.upvote();
}
document.write(twoComment.votesQty, '<br>');
document.write(treeComment.text, '<br>');
for (i=10; i<41; i++) {
    treeComment.upvote();
}
document.write(treeComment.votesQty, '<br>');

document.write(Comment.mergeComments('Первая половина текста','Вторая половина текста'))



