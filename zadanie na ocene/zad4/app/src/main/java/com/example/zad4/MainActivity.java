package com.example.zad4;

import android.os.Bundle;
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

        Button przycisk = findViewById(R.id.przycisk);
        przycisk.setEnabled(false);

        EditText mail = findViewById(R.id.email);
        EditText haslo = findViewById(R.id.haslo);

        View.OnFocusChangeListener focusChangeListener = (view, hasFocus) -> {
            if (!hasFocus) {
                String email = mail.getText().toString();
                String password = haslo.getText().toString();
                boolean valid = checkAll(email, password, mail, haslo);
                przycisk.setEnabled(valid);
            }
        };

        mail.setOnFocusChangeListener(focusChangeListener);
        haslo.setOnFocusChangeListener(focusChangeListener);

        przycisk.setOnClickListener(view -> {
            TextView test = findViewById(R.id.test);
            test.setText("działa");
        });
    }

    public boolean checkAll(String xmail, String ypass, EditText emailField, EditText passwordField) {
        boolean hasAt = xmail.contains("@");
        boolean hasDot = xmail.contains(".");

        if (!hasAt || !hasDot) {
            emailField.setError("Email musi zawierać małpę (@) i kropkę!");
            return false;
        }

        if (ypass.length() < 6) {
            passwordField.setError("Hasło musi mieć więcej niż 5 znaków!");
            return false;
        }

        return true;
    }
}
