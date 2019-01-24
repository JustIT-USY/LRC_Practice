#include <stdio.h>
int main()
{
	int a,b;
	int*p1=&a; 
	int*p2=&b;
	scanf("%d,%d",&a,&b);
	printf("The number is:%d,%d\n",*p1,*p2);	
	printf("%s\n", );	return 0;
}

#include <stdio.h>
int main()
{
	long i;
	long *p;
	printf("please input the number:\n",&*p);
	scanf("%ld",&i);
	p=&i;
	printf("the rusult1 is:%ld\n",&*p );
	printf("the result2 is:%ld\n",&i );

	/* code */
	return 0;
}

#include <stdio.h>
int main()
{
	long i;
	long *p;
	printf("please input the number:\n",&*p);
	scanf("%ld",&i);
	p=&i;
	printf("the rusult1 is:%ld\n",&*p );
	printf("the result2 is:%ld\n",&i );
    printf("the result3 is:%ld\n",*p );
    return 0
}

#include <stdio.h>
int main()
{
	int i;
	int *p;
	printf("please input the number:\n");
	scanf("%d\n",&i);
	p=&i;
	printf("the result1 is:%d \n",p);
	p++;
	printf("the result2 is:%d\n",p );
	return 0
}

#include <stdio.h>
int main()
{
	int *p;
	int *q;
	int a[5];
	int b[5];
	p=&a[0];
	printf("please input array b:\n");
	for(i=0;i<5;i++)
	{
    scanf("%d",&b[i]);
	}
	printf("array a is:\n");
    for(i=0;i<5;i++)
    {
    	printf("%5d\n",(p+1) );

    }
    printf("\n");
    printf("array b is:\n");
    for (int i = 0; i < 5; i++)
    {
    	printf("%5d",*(q+i) );
    	/* code */
    }
    printf("\n");
}

#include <stdio.h>
int main()
{
	int *p;
	int *q;
	int a[5];
	int b[5];
	p=&a[0];
	q=b;
	printf("please input array a:\n");
	for (i=0;i<5;i++)
	
		scanf("%d",&a[i]);
	
	printf("please input array b:\n");
	for (i=0;i<5;i++)
		scanf("%d",&b[i]);
	printf("array a is:\n");
	for(i=0;i<5;i++)
		printf("%5d,*(a+i)");
	printf("\n");
	printf("arrau b is:\n");
	for(i=0;i<5;i++)
		printf("%5d",*(b+i));
	printf("\n");
	return 0
}

#include <stdio>
int main()
{
	int *p;
	int *q;
	int a[5];
	int b[5];
	int i;
	p=&a[0];
	q=b;
	printf("please input array a :\n");
	for (i=0;i<5;i++)
		scanf("%d",&a[i]);
	printf("please input array b:\n");
	for (i=0;i<5;i++)
		scanf("%d",&b[i]);
	printf("\n");
	printf("array a is:\n");
	for(i=0;i<5;i++)
		printf("%5d\n",*p++ );
	printf("\n");
	printf("array b is:\n");
	for(i=0;i<5;i++)
		printf("%5d\n",*q++ );
	printf("\n");
	/* code */
	return 0;
}
