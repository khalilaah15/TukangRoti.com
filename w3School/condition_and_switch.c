#include<stdio.h>
int main(){
    // syntax 
    // if (condition){statement}
    // if (condition){statement} else {statement}
    // if (condition){statement} else if (condition){statement} else {statement}
    // bagian condition berisi operator komparasi, contohnya:
    // <, <=, >, >=, ==, !=

    // SHORT HAND IF
    // syntax = variable = (condition) ? exxpressTrue : expressFalse
    int check = (95 % 2 == 0) ? printf("Is true\n") : printf("Is false\n");

    int time = 18;
    (time < 20) ? printf("that's true\n") : printf("that's false\n"); 

    // SWITCH
    // syntax: 
    // switch(expression) {
    //      case x:
    //          code block;
    //          break;
    //      case y:
    //          code block;
    //          break;
    //      default:
    //          code block;
    //   } 
    int day = 4;
    switch(day){
        case 1:
            printf("Monday");
            break;
        case 2:
            printf("Tuesday");
            break;      
        case 3:
            printf("Wednesday");
            break;    
        case 4:
            printf("Thursday");
            break;
        case 5:
            printf("Friday");
            break;
        case 6:
            printf("Saturday");
            break;
        case 7:
            printf("Sunday");
            break;
        default:
            printf("Error");
    }
}