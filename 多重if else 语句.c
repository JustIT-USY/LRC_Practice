//����if else ���

#include <stdio.h>
int main() 
{
    int tmp ;
    printf("��������Ҫ�µ����֣�");
	scanf("%d", &tmp);

    if (tmp>=10000)
    {
        printf("��ʯ���");
    }
    else if (tmp<=5000)
    {
        printf("�׽����");    
    }
     else if (tmp>8000)
    {
        printf("�������");    
    }
    
        else
    {
        printf("���������");    
    }
  
    return 0;
}
