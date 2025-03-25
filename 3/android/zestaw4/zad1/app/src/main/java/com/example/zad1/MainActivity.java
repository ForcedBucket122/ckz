package com.example.zad1;

import android.content.DialogInterface;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Switch;

import androidx.activity.EdgeToEdge;
import androidx.appcompat.app.AlertDialog;
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

        // Handle system bars padding
        ViewCompat.setOnApplyWindowInsetsListener(findViewById(R.id.main), (v, insets) -> {
            Insets systemBars = insets.getInsets(WindowInsetsCompat.Type.systemBars());
            v.setPadding(systemBars.left, systemBars.top, systemBars.right, systemBars.bottom);
            return insets;
        });

        // Initialize views
        Button zapisz = findViewById(R.id.zapisz);
        Switch rodo = findViewById(R.id.zgoda);
        EditText imie = findViewById(R.id.imie);
        EditText nazwisko = findViewById(R.id.nazwisko);

        // Create AlertDialog.Builder
        AlertDialog.Builder dialog = new AlertDialog.Builder(this);

        // Set click listener for the button
        zapisz.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                // Retrieve input values
                String imieStr = imie.getText().toString().trim();
                String nazwiskoStr = nazwisko.getText().toString().trim();

                // Validate input
                if (imieStr.isEmpty() || nazwiskoStr.isEmpty()) {
                    dialog.setMessage("Proszę wprowadzić imię i nazwisko.");
                    dialog.setPositiveButton("OK", null);
                    dialog.show();
                    return;
                }

                // Check RODO switch state
                if (rodo.isChecked()) {
                    dialog.setMessage(imieStr + " " + nazwiskoStr + " wyraził(a) zgodę na RODO.");
                } else {
                    dialog.setMessage(imieStr + " " + nazwiskoStr + " nie wyraził(a) zgody na RODO.");
                }

                // Show the dialog
                dialog.setPositiveButton("OK", null);
                dialog.show();
            }
        });
    }
}