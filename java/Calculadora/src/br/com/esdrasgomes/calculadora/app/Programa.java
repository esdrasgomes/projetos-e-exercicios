package br.com.esdrasgomes.calculadora.app;

import br.com.esdrasgomes.calculadora.fabricas.FabricaCalculosMatematicos;
import br.com.esdrasgomes.calculadora.interfaces.CalculadorMatematico;

public class Programa {

	public static void main(String[] args) {
		
		String calculo = "+";
		int numero1 = 4;
		int numero2 = 2;
		FabricaCalculosMatematicos fabrica = new FabricaCalculosMatematicos();
		CalculadorMatematico calculador = fabrica.criarCalculador(numero1, numero2, calculo);
		if (calculador != null) {
			System.out.println(calculador.calcular());
		} else {
			System.out.println("Calculo inválido!");
		}
	}

}
