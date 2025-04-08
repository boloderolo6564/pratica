import java.util.Scanner;
public class condicional {
    public static void main(String[] args){
        try (Scanner scanner = new Scanner(System.in)) {

            System.out.println("digite a nota 1");
            float n1 = scanner.nextInt();
            System.out.println("digite a nota 2");
            float n2 = scanner.nextInt();
            System.out.println("digite a nota 3");
            float n3 = scanner.nextInt();
            System.out.println("digite a nota 4");
            float n4 = scanner.nextInt();
            double media = (n1+n2+n3+n4)/4;
            if (media >= 7){
                System.out.println("aprovado");
            }
            else{
                System.out.println("reprovado");
            }
    }
    }
}
