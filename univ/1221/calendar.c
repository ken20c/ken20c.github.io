#include <stdio.h>
 
int dayweek(int y, int m, int d);  // 指定した日の曜日を数値（0～6）で返す関数
int lastday(int y, int m);   // 指定した月の最終日を返す関数
 
int main(void)
{
    int year, month;
    int dw, last;
    int i, j;
 
    while ( 1 ) {
        printf("年と月を入力してください: ");
        scanf("%d %d", &year, &month);
 
        if (year < 0 || month < 1 || month > 12) {
            break;
        }
 
        dw = dayweek(year, month, 1);
        last = lastday(year, month);
 
        printf("\nSun Mon Tue Wed Thu Fri Sat\n");
 
        for (i = 0; i < dw; ++i) {
            printf("    ");
        }
        for (i = 1; i <= last; ++i) {
            printf(" %2d ", i);
            if (dayweek(year, month, i) == 6) {
                printf("\n");
            }
        }
        printf("\n\n");
    }
 
    return 0;