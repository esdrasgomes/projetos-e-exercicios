package informacoesdosistema;

import java.awt.Dimension;
import java.awt.Toolkit;
import java.util.Date;
import java.util.Locale;

public class InformacoesDoSistema {

   public static void main(String[] args) {
        System.out.println("<<Informações do Sistema>>\n");    
        //vendo configurações do sistema 
        System.out.println("Nome: " + System.getProperty("os.name"));
        System.out.println("Versão: " + System.getProperty("os.version"));
        System.out.println("Usuário: " + System.getProperty("user.name"));    
        //idioma do meu sistema
        Locale idioma = Locale.getDefault();
        System.out.println("Idioma: "+idioma.getDisplayLanguage()+"/"+idioma.getLanguage());    
        //Resolução da tela
        Toolkit tela = Toolkit.getDefaultToolkit();
        Dimension d = tela.getScreenSize();
        System.out.println("Resolução do Display: "+d.width+" x "+d.height);    
        //Data e Hora atuais
        Date horas = new Date();
        System.out.println("Data/Hora: "+horas+"\n");      
    }
    
}
