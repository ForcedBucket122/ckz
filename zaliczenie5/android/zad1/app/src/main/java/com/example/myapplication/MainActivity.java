package com.example.myapplication;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.TextView;
import android.widget.Toast;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

    private EditText Powierzchnia;
    private Button Oblicz;
    private RadioButton Rb1;
    private RadioButton Rb2;
//    private TextView Wynik;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });
        Powierzchnia = findViewById(R.id.powierzchnia);
        Oblicz = findViewById(R.id.licz);
        Rb1=findViewById(R.id.RB1);
        Rb2=findViewById(R.id.RB2);
        TextView Wynik = findViewById(R.id.wyswietl);

        Oblicz.setOnClickListener(v -> {
            int p = Integer.parseInt(String.valueOf(Powierzchnia.getText()));
            int cena = 0;
            if(Rb1.isChecked()){
                cena=250;
            } else if (Rb2.isChecked()) {
                cena=200;
            }else{
                Toast.makeText(this,"Wybierz rozmiar płytki", Toast.LENGTH_LONG).show();
            }
            if(cena!=0){
                int obliczone = Oblicz(p,cena);
                Wynik.setText("Koszt wykafelkowania łazienki: "+obliczone+ " zł");
            }
        });
    }

    public int Oblicz(int powierzchnia, int cena){
        return powierzchnia*cena;
    }
}