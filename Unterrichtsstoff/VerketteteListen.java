public class Waggon{	//WICHTIG: Das hier muss man verstehen und wiedergeben können.

	//Instanzvariablen

	private int hoehe;
	private int breite;
	private Waggon next; 		//pointer auf den Nachfolger
	private int alter;
	private int nummer;


	//Konstruktor

	public Waggon(int nummer){
		this.hoehe = 4;
		this.breite = 6;
		this.passagiere = 0;
		this.alter = 0;
		this.next = this; 		//pointer zeigt auf sich selber
		this.waggonnummer = nummer;
	}


	//Methoden

	public void insert(Waggon newWaggon){
		if(next == this){				//falls dieser Waggon der lezte ist, häng' newWaggon an.
			next = newWaggon;
		}else{
			next.insert(newWaggon);		//falls nicht, führe insert aus, also das obige.
		}
	}

	public void deleteOldWaggon(){
		if(next.alter > 36){
			Waggon x = next.getNext();
			this.next = x;
		}

		if(!(this.next.getNext() == this.next){	//man prüft, ob es einen Übernächsten gibt, also ob der nächste Wagen schpn der letzte ist.
			this.next.deleteOldWaggon();
		}
	}

	public Waggon getNext(){
		return next;
	}

	public void delete(int nummer){
		if(next.wagennummer == nummer){
			deleteNext();
		}else{
			if(!(this.next = this)){
				this.next.delete(nummer);
			}
		}
	}

	public void insertSorted(Waggon waggon){
		if(next.getNummer() > waggon.getNummer()){
			Waggon x = next;
			this.next = waggon;
			
			if(!(this == next){				//falls es nicht der letzte ist, dann ranhängen
				next.setNext(x);
			}

			
		}
	}
}

//Beispiel für die Klasse für de ersten Zug


public class Zug{

	//Instanzvariablen
	private  Waggon ersterWaggon;


	//Konstruktor
	public Zug(Waggon a){
		this.ersterWaggon = a;
	}

	//Methoden
}






















