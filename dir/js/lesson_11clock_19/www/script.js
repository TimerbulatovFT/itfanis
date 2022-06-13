/* ДЕСТРУКТУРИЗАЦИЯ ОБЪЕКТОВ */
const objOne = {
  propertyOne: "red",
  propertyTwo: "black",
  propertyTree: 100,
}

const {propertyOne, propertyTwo} = objOne;
document.write(propertyOne, "<br>");
document.write(propertyTwo, "<br>");

/* ДЕСТРУКТУРИЗАЦИЯ МАССИВОВ */
const arrOne = ["red", "black", 100]

const [propertyArrOne, propertyArrTwo] = arrOne;
document.write(propertyArrOne, "<br>");
document.write(propertyArrTwo, "<br>");

/* ДЕСТРУКТУРИЗАЦИЯ В ФУНКЦИЯХ */

const userProfile = {
  name: 'Fanis',
  comments: 45,
  treeProperty: false
}

const checkComments = ({name, comments}) => {
if (!comments){
  return `${name} не имеет комментариев`
} else {
  return `${name} имеет ${comments} комментариев`
}
}

document.write(checkComments(userProfile));
