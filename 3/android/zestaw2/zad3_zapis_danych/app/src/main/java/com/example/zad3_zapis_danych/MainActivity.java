package com.example.zad3_zapis_danych;

import android.content.SharedPreferences;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;
import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    private EditText inputText;
    private TextView displayText;
    private SharedPreferences sharedPreferences;
    private static final String PREF_NAME = "MyPrefs";
    private static final String KEY_TEXT = "savedText";

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        inputText = findViewById(R.id.inputText);
        displayText = findViewById(R.id.displayText);
        Button saveButton = findViewById(R.id.saveButton);

        sharedPreferences = getSharedPreferences(PREF_NAME, MODE_PRIVATE);

        // Odczytaj zapisany tekst przy uruchomieniu
        displayText.setText(sharedPreferences.getString(KEY_TEXT, "Brak zapisanych danych"));

        saveButton.setOnClickListener(v -> saveData());
    }

    private void saveData() {
        String text = inputText.getText().toString();
        SharedPreferences.Editor editor = sharedPreferences.edit();
        editor.putString(KEY_TEXT, text);
        editor.apply();

        displayText.setText(text); // Aktualizacja UI
    }
}
