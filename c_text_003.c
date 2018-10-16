//多重if else 语句

#include <stdio.h>
int main() 
{
    int tmp ;
    printf("请输入你要猜的数字：");
	scanf("%d", &tmp);

    if (tmp>=10000)
    {
        printf("钻石玩家");
    }
    else if (tmp<=5000)
    {
        printf("白金玩家");    
    }
     else if (tmp>8000)
    {
        printf("铂金玩家");    
    }
    
        else
    {
        printf("黑土金玩家");    
    }
  
    return 0;
}
