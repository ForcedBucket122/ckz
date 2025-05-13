package com.example.myapplication;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.text.TextUtils;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import androidx.appcompat.app.AppCompatActivity;

public class MainActivity extends AppCompatActivity {

    EditText urlInput, placeNameInput, latitudeInput, longitudeInput;
    Button openUrlButton, openPlaceButton, openCoordinatesButton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);

        // Znajdź widoki
        urlInput = findViewById(R.id.urlInput);
        placeNameInput = findViewById(R.id.placeNameInput);
        latitudeInput = findViewById(R.id.latitudeInput);
        longitudeInput = findViewById(R.id.longitudeInput);

        openUrlButton = findViewById(R.id.openUrlButton);
        openPlaceButton = findViewById(R.id.openPlaceButton);
        openCoordinatesButton = findViewById(R.id.openCoordinatesButton);

        // Otwórz URL
        openUrlButton.setOnClickListener(v -> {
            String url = urlInput.getText().toString().trim();
            if (!url.startsWith("http")) {
                url = "https://" + url;
            }
            if (!TextUtils.isEmpty(url)) {
                Intent browserIntent = new Intent(Intent.ACTION_VIEW, Uri.parse(url));
                startActivity(browserIntent);
            } else {
                Toast.makeText(this, "Wpisz poprawny adres URL", Toast.LENGTH_SHORT).show();
            }
        });

        // Pokaż lokalizację po nazwie
        openPlaceButton.setOnClickListener(v -> {
            String place = placeNameInput.getText().toString().trim();
            if (!TextUtils.isEmpty(place)) {
                Uri gmmIntentUri = Uri.parse("geo:0,0?q=" + Uri.encode(place));
                Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                mapIntent.setPackage("com.google.android.apps.maps");
                startActivity(mapIntent);
            } else {
                Toast.makeText(this, "Wpisz nazwę miejsca", Toast.LENGTH_SHORT).show();
            }
        });

        // Pokaż lokalizację wg współrzędnych
        openCoordinatesButton.setOnClickListener(v -> {
            String lat = latitudeInput.getText().toString().trim();
            String lon = longitudeInput.getText().toString().trim();
            if (!TextUtils.isEmpty(lat) && !TextUtils.isEmpty(lon)) {
                try {
                    double latitude = Double.parseDouble(lat);
                    double longitude = Double.parseDouble(lon);
                    Uri gmmIntentUri = Uri.parse("geo:" + latitude + "," + longitude + "?q=" + latitude + "," + longitude);
                    Intent mapIntent = new Intent(Intent.ACTION_VIEW, gmmIntentUri);
                    mapIntent.setPackage("com.google.android.apps.maps");
                    startActivity(mapIntent);
                } catch (NumberFormatException e) {
                    Toast.makeText(this, "Nieprawidłowe współrzędne", Toast.LENGTH_SHORT).show();
                }
            } else {
                Toast.makeText(this, "Wpisz oba pola współrzędnych", Toast.LENGTH_SHORT).show();
            }
        });
    }
}
