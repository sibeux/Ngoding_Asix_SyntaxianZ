#include <cstdio>
#include <iostream>
#include <vector>
using namespace std;

int main()
{
    int numb;
    scanf("enter yout numb %d", &numb);
    std::vector<int> arr_numb;
    int index = numb;
    while (index > 0)
    {
        int number;
        scanf("%d", &number);
        arr_numb.push_back(numb);
        index--;
    }
    //   int age;

    //   printf("Enter your age : ");

    // get age from user
    //   scanf("%d", &age);

    // print age
    //   printf("Your age %d ", age+2);

    return 0;
}