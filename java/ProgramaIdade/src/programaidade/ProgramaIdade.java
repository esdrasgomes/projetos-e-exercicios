/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package programaidade;

import java.util.Scanner;
/**
 *
 * @author esdrasgomes
 */
public class ProgramaIdade {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        
        Scanner t = new Scanner(System.in);
        
        System.out.println("Em que ano você nasceu? ");
        
        int nasc = t.nextInt();
        int i = 2015-nasc;
        if (i>=18) {
            System.out.println("Você tem " + i + " anos! Então, você é maior de idade.");
        } else {
            System.out.println("Você tem " + i + " anos! Então, você é menor de idade.");
        }
    }
    
}
