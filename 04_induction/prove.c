#include <stdio.h>

void prove(int n)
{
    int k;
    printf("现在开始证明P(%d)成立\n", n);
    k = 0;
    printf("根据步骤1得出P(%d)成立\n", k);

    while(k < n) {
        printf("根据步骤2可以说【若P(%d)成立，则P(%d)也成立】\n", k, k+1);
        printf("因此可以说【P(%d)是成立的】\n", k+1);
        k = k+1;
    }
    printf("证明结束\n");
}

int main(){
    prove(10);

    return 1;
}
