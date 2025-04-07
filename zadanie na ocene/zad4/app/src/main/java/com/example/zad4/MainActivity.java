package com.example.zad4;

import android.os.Bundle;
import android.text.Editable;
import android.text.TextWatcher;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.TextView;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.graphics.Insets;
import androidx.core.view.ViewCompat;
import androidx.core.view.WindowInsetsCompat;

public class MainActivity extends AppCompatActivity {

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

        // Inicjalizacja widoków
        Button przycisk = findViewById(R.id.przycisk);
        przycisk.setEnabled(false); // Przycisk jest domyślnie nieaktywny

        EditText mail = findViewById(R.id.email);
        EditText haslo = findViewById(R.id.haslo);

        // Tworzymy TextWatcher do monitorowania zmian w polach tekstowych
        TextWatcher textWatcher = new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start, int count, int after) {
                // Nie potrzebujemy implementować tej metody
            }

            @Override
            public void onTextChanged(CharSequence s, int start, int before, int count) {
                // Pobieramy aktualne wartości pól tekstowych
                String email = mail.getText().toString();
                String password = haslo.getText().toString();

                // Sprawdzamy poprawność danych
                boolean valid = checkAll(email, password, mail, haslo);

                // Aktualizujemy stan przycisku
                przycisk.setEnabled(valid);
            }

            @Override
            public void afterTextChanged(Editable s) {
                // Nie potrzebujemy implementować tej metody
            }
        };

        // Dodajemy TextWatcher do obu pól tekstowych
        mail.addTextChangedListener(textWatcher);
        haslo.addTextChangedListener(textWatcher);

        // Obsługa kliknięcia przycisku
        przycisk.setOnClickListener(view -> {
            TextView test = findViewById(R.id.test);
            test.setText("działa");
        });
    }

    // Metoda sprawdzająca poprawność danych
    public boolean checkAll(String xmail, String ypass, EditText emailField, EditText passwordField) {
        boolean hasAt = xmail.contains("@");
        boolean hasDot = xmail.contains(".");

        // Sprawdzenie poprawności adresu email
        if (!hasAt || !hasDot) {
            emailField.setError("Email musi zawierać małpę (@) i kropkę!");
            return false;
        }

        // Sprawdzenie długości hasła
        if (ypass.length() < 6) {
            passwordField.setError("Hasło musi mieć więcej niż 5 znaków!");
            return false;
        }

        // Jeśli wszystko jest poprawne
        emailField.setError(null); // Usuwamy błędy
        passwordField.setError(null);
        return true;
    }
}