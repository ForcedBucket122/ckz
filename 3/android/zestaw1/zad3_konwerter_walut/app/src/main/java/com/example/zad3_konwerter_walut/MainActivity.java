package com.example.zad3_konwerter_walut;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {
    Spinner spinner1, spinner2;
    EditText editText1, editText2;
    double EUR = 4.5;
    double USD = 4.2;
    double PLN = 1;
    double GBP = 5;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        EdgeToEdge.enable(this);
        setContentView(R.layout.activity_main);

        spinner1 = findViewById(R.id.spinner1);
        spinner2 = findViewById(R.id.spinner2);
        editText1 = findViewById(R.id.editText1);
        editText2 = findViewById(R.id.editText2);
    }

    public void przelicz(View view) {

        double wartosc = Double.parseDouble(editText1.getText().toString());
        String waluta1 = spinner1.getSelectedItem().toString();
        String waluta2 = spinner2.getSelectedItem().toString();
        double wartoscPLN = 0;
        double wynik = 0;

        switch (waluta1) {
            case "EUR": wartoscPLN = wartosc * EUR; break;
            case "USD": wartoscPLN = wartosc * USD; break;
            case "GBP": wartoscPLN = wartosc * GBP; break;
            case "PLN": wartoscPLN = wartosc; break;
        }

        switch (waluta2) {
            case "EUR": wynik = wartoscPLN / EUR; break;
            case "USD": wynik = wartoscPLN / USD; break;
            case "GBP": wynik = wartoscPLN / GBP; break;
            case "PLN": wynik = wartoscPLN; break;
        }

        editText2.setText(String.valueOf(wynik));
    }
}
