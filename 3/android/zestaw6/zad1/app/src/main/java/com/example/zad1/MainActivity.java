package com.example.zad1;

import android.content.Context;
import android.content.SharedPreferences;
import android.content.res.AssetManager;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

import com.example.zad1.R;

import java.io.BufferedReader;
import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

public class MainActivity extends AppCompatActivity {

    Button wczytajZPliku;
    Button zapiszDoPliku;
    EditText wynik;
    SharedPreferences sharedPreferences;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        wczytajZPliku = findViewById(R.id.wczytaj);
        zapiszDoPliku = findViewById(R.id.zapisz);
        wynik = findViewById(R.id.wynik);

        // SharedPreferences
        sharedPreferences = getSharedPreferences("MyPrefs", Context.MODE_PRIVATE);

        // Obsługa przycisku "Wczytaj z pliku"
        wczytajZPliku.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                wczytajDaneZPliku();
            }
        });

        // Obsługa przycisku "Zapisz do pliku"
        zapiszDoPliku.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                zapiszDaneDoPliku();
            }
        });
    }

    public void wczytajDaneZPliku() {
        try {
            // Wczytanie danych z pliku
            AssetManager assetManager = getAssets();
            InputStream inputStream = assetManager.open("test.txt");
            BufferedReader reader = new BufferedReader(new InputStreamReader(inputStream));
            StringBuilder stringBuilder = new StringBuilder();
            String line;
            while ((line = reader.readLine()) != null) {
                stringBuilder.append(line).append("\n");
            }

            SharedPreferences.Editor editor = sharedPreferences.edit();
            editor.putString("dane", stringBuilder.toString());
            editor.apply();

            wynik.setText( stringBuilder.toString());
            Toast.makeText(this, "Dane wczytane", Toast.LENGTH_LONG).show();
        } catch (IOException e) {
            e.printStackTrace();
            wynik.setText("Błąd podczas wczytywania pliku.");
        }
    }

    public void zapiszDaneDoPliku() {
        try {
            // Pobierz tekst z EditText jako dane do zapisania
            String dane = wynik.getText().toString();

            // Zapisz dane w SharedPreferences
            SharedPreferences.Editor editor = sharedPreferences.edit();
            editor.putString("dane", dane);
            editor.apply();

            // Zapisz dane do pliku "test.txt"
            FileOutputStream fos = openFileOutput("test.txt", Context.MODE_PRIVATE);
            fos.write(dane.getBytes());
            fos.close();

            // Wyświetl wynik
            Toast.makeText(this, "Dane zapisane do pliku i SharedPreferences.", Toast.LENGTH_LONG).show();
        } catch (IOException e) {
            e.printStackTrace();
            wynik.setText("Błąd podczas zapisywania do pliku.");
            Toast.makeText(this, "Błąd podczas zapisywania.", Toast.LENGTH_LONG).show();
        }
    }

}
