$(document).ready(function() {
  // Handle change event of the color filter dropdown
  $('#color-filter').change(function() {
    var colorClass = $(this).val();
    if (colorClass === 'default') {
      // Restore default colors
      $('#region_madaum path').attr('fill', '#ccc');
      $('#region_pagsabangan path').attr('fill', '#ccc');
      $('#region_mankilam path').attr('fill', '#ccc');
      $('#region_apokon path').attr('fill', '#ccc');
      $('#region_sanmiguel path').attr('fill', '#ccc');
      $('#region_lafilipina path').attr('fill', '#ccc');
      $('#region_busaon path').attr('fill', '#ccc');
      $('#region_balamban path').attr('fill', '#ccc');
      $('#region_cuambogan path').attr('fill', '#ccc');
      $('#region_nuevafuerza path').attr('fill', '#ccc');  
      $('#region_sanagustin path').attr('fill', '#ccc');
      $('#region_pandapan path').attr('fill', '#ccc');
      $('#region_mankilam path').attr('fill', '#ccc');
      $('#region_magugpoeast path').attr('fill', '#ccc');
      $('#region_magugposouth path').attr('fill', '#ccc');
      $('#region_magugpowest path').attr('fill', '#ccc');
      $('#region_magugponorth path').attr('fill', '#ccc');
      $('#region_magugpopoblacion path').attr('fill', '#ccc');
      $('#region_visayanvillage path').attr('fill', '#ccc');
      $('#region_canocotan path').attr('fill', '#ccc');
      $('#region_sanisidro path').attr('fill', '#ccc');
      $('#region_bincungan path').attr('fill', '#ccc');
      $('#region_liboganon path').attr('fill', '#ccc');
    } else {
      // Change colors based on filter
      $('#region_pagsabangan path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_pagsabangan') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_madaum path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_madaum') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_sanisidro path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_sanisidro') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_bincungan path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_bincungan') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_liboganon path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_liboganon') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_visayanvillage path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_visayanvillage') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_canocotan path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_canocotan') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_balamban path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_balamban') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_magugpopoblacion path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_magugpopoblacion') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_magugponorth path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_magugponorth') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_magugpowest path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_magugpowest') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_magugposouth path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_magugposouth') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_pandapan path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_pandapan') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_magugpoeast path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_magugpoeast') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_magdum path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_magdum') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_sanagustin path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_sanagustin') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_mankilam path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_mankilam') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_nuevafuerza path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_nuevafuerza') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_busaon path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_busaon') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_lafilipina path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_lafilipina') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_sanmiguel path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_sanmiguel') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
       $('#region_mankilam path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_mankilam') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
        $('#region_cuambogan path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_cuambogan') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_apokon path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_apokon') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
      $('#region_mankilam path').attr('fill', function() {
        if ($(this).parent().attr('id') === 'region_mankilam') {
          return colorClass;
        } else {
          return '#ccc';
        }
      });
    }
  });
});


// BACK END JS

