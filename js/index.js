var students = [
    {
        "id": "1",
        "name": "MM",
        "surname": "Mitrovic",
        "averageGrade": "10", 
        "gradeDocNum":"2016/23",
        "imageURL": ""
        
    },
    {
        "id": "2",
        "name": "Nikola",
        "surname": "Peric",
        "averageGrade": "10", 
        "gradeDocNum":"2018/10",
        "imageURL": ""
        
    }
]




$.each(students, function(index){

    var p = $('<p>', {

        id: students[index].id,
        class: 'student',
        html: students[index].name +" "+ students[index].surname  //tekst koji smo zaboravili
    });

    
    p.appendTo($('#students'));
})